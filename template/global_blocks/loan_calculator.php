<?php if(have_rows('loan_calculator')) : ?>
    <?php while ( have_rows('loan_calculator') ) : the_row(); ?>

    <?php 
        $section_class = get_sub_field('section_class');
        $section_background = get_sub_field('section_background');
    ?>

    <section class="loan_calculator <?php echo $section_class; ?>" style="background: <?php echo $section_background; ?>;">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row calculator_gap">
                    <div class="col-xl-4">
                        <div class="calculator">
                            <div class="calculator_heading">
                                <h3>Lorem ipsum dolor sit</h3>
                            </div>
                            <div class="calculator_body">
                                <form action="">
                                    <div class="form-input">
                                        <label for="loan_type" class="mb-3">Type of Loan</label>
                                        <select name="" id="loan_type" class="">
                                            <option value="">Select Property Type</option>
                                            <option value="Enterprise Loan">Enterprise Loan</option>
                                            <option value="Microfinance Loan">Microfinance Loan</option>
                                            <option value="Powerpayday Loan">Powerpayday Loan</option>
                                            <option value="Auto Loan">Auto Loan</option>
                                            <option value="Luxury Bike">Luxury Bike</option>
                                        </select>
                                    </div>

                                    <div class="form-input">
                                        <label for="loan_amount" class="mb-3">Loan Amount</label>
                                        <input type="number" class="" id="loan_amount" placeholder="PHP 0.00">
                                    </div>
                                    
                                    <div class="form-input">
                                        <label for="months_to_pay" class="mb-3">No. of Months to Pay</label>
                                        <select name="" id="months_to_pay" class="">
                                            <option value="">Select Months to Pay</option>
                                        </select>
                                    </div>
                                    
                                    <input type="text" class="d-none" id="rate_per_month" readonly="readonly">

                                    <div class="hr"></div>

                                    <div class="form-input">
                                        <label for="monthly_amortization" class="mb-3">Monthly Amortization</label>
                                        <input type="text" name="" class="" id="monthly_amortization" readonly="readonly" placeholder="PHP 0.00">
                                    </div>

                                    <div class="d-flex flex-column flex-sm-row calculator_buttons">
                                        <button type="button" id="btnCompute">Compute</button>
                                        <button type="button" id="btnReset">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="table_info">
                            <div class="table_head">
                                <h3>Lorem ipsum dolor sit</h3>
                            </div>
                            <div class="table_body">
                                <div class="table">
                                <table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Months to Pay</th>
            <th>Rate per Annum</th>
            <th colspan="2">Add on Rate per Month</th>
            <!-- <th>Type</th> -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Enterprise Loan</td>
            <td></td>
            <td>30.00%</td>
            <td>2.50%</td>
            <td>Fixed / Standard</td>
        </tr>
        <tr>
            <td>Microfinance Loan</td>
            <td></td>
            <td>36.00%</td>
            <td>3.00%</td>
            <td>Fixed / Standard</td>
        </tr>
        <tr>
            <td>Power payday Loan</td>
            <td>6</td>
            <td>17.88%</td>
            <td>1.49%</td>
            <td>Fixed / Standard</td>
        </tr>
        <tr>
            <td>Power payday Loan</td>
            <td>12</td>
            <td>17.88%</td>
            <td>1.49%</td>
            <td>Fixed / Standard</td>
        </tr>
        <tr>
            <td>Power payday Loan</td>
            <td>18</td>
            <td>17.88%</td>
            <td>1.49%</td>
            <td>Fixed / Standard</td>
        </tr>
        <tr>
            <td>Power payday Loan</td>
            <td>24</td>
            <td>17.88%</td>
            <td>1.49%</td>
            <td>Fixed / Standard</td>
        </tr>
        <tr>
            <td>Power payday Loan</td>
            <td>36</td>
            <td>20.28%</td>
            <td>1.69%</td>
            <td>Fixed / Standard</td>
        </tr>
        <tr>
            <td>Auto Loan</td>
            <td>12</td>
            <td>7.500%</td>
            <td>0.63%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Auto Loan</td>
            <td>18</td>
            <td>11.010%</td>
            <td>0.61%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Auto Loan</td>
            <td>24</td>
            <td>14.870%</td>
            <td>0.62%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Auto Loan</td>
            <td>36</td>
            <td>22.810%</td>
            <td>0.63%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Auto Loan</td>
            <td>48</td>
            <td>23.000%</td>
            <td>0.48%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Auto Loan</td>
            <td>60</td>
            <td>29.000%</td>
            <td>0.48%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Luxury Bike</td>
            <td>12</td>
            <td>9.215%</td>
            <td>0.77%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Luxury Bike</td>
            <td>24</td>
            <td>18.315%</td>
            <td>1.53%</td>
            <td>ALCO</td>
        </tr>
        <tr>
            <td>Luxury Bike</td>
            <td>36</td>
            <td>27.150%</td>
            <td>2.26%</td>
            <td>ALCO</td>
        </tr>
    </tbody>
</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>