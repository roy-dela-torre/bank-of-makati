function setupPagination(parent, row, col) {
    const paginationNumbers = $("#pagination-numbers");
    const paginatedList = $(parent + row);
    const listItems = paginatedList.find(col);
    const nextButton = $("#next-button");
    const prevButton = $("#prev-button");

    const paginationLimit = 6;
    const pageCount = Math.ceil(listItems.length / paginationLimit);
    let currentPage = 1;

    const disableButton = (button) => {
        button.addClass("disabled");
        button.attr("disabled", true);
    };

    const enableButton = (button) => {
        button.removeClass("disabled");
        button.removeAttr("disabled");
    };

    const handlePageButtonsStatus = () => {
        if (currentPage === 1) {
            disableButton(prevButton);
        } else {
            enableButton(prevButton);
        }

        if (pageCount === currentPage) {
            disableButton(nextButton);
        } else {
            enableButton(nextButton);
        }
    };

    const handleActivePageNumber = () => {
        $(".pagination-number").removeClass("active").each(function () {
            const pageIndex = Number($(this).attr("page-index"));
            if (pageIndex === currentPage) {
                $(this).addClass("active");
            }
        });
    };

    const appendPageNumber = (index) => {
        const pageNumber = $("<button></button>").addClass("pagination-number").html(index).attr("page-index", index).attr("aria-label", "Page " + index);
        paginationNumbers.append(pageNumber);
    };

    const getPaginationNumbers = () => {
        for (let i = 1; i <= pageCount; i++) {
            appendPageNumber(i);
        }
    };

    const setCurrentPage = (pageNum) => {
        currentPage = pageNum;

        handleActivePageNumber();
        handlePageButtonsStatus();

        const prevRange = (pageNum - 1) * paginationLimit;
        const currRange = pageNum * paginationLimit;

        listItems.hide().slice(prevRange, currRange).show();
    };

    getPaginationNumbers();
    setCurrentPage(1);

    prevButton.on("click", function () {
        setCurrentPage(currentPage - 1);
    });

    nextButton.on("click", function () {
        setCurrentPage(currentPage + 1);
    });

    $(document).on("click", ".pagination-number", function () {
        setCurrentPage(parseInt($(this).attr("page-index")));
    });
    console.log('function run again')
}
$(document).ready(function () {
    setupPagination("div#post-content",".row",".col-lg-4");
});