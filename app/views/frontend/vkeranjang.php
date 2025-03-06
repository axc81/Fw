        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">
                        
                        <form method="post" action="<?php echo PAYPAL_URL; ?>">
                           
                            <h1>Shopping cart</h1>
                            <p class="text-muted">You currently have <?= $data['hitungProduct']['0']; ?> item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Discount</th>
                                            <th colspan="3">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['user'] as $users) {?>
                                            <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                                            <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">

                                            <!-- Specify a Buy Now button. -->

                                            <input type="hidden" name="cmd" value="_xclick">                                                                                        


                                            <!-- Specify details about the item that buyers will purchase. -->

                                            <input type="hidden" name="item_name" value="<?= $users['pName'] ?>">


                                            <input type="hidden" name="item_number" value="<?= $users['pId'] ?>">


                                            <input type="hidden" name="amount" value="<?= $users['total']; ?>">


                                            <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">


                                            <!-- Specify URLs -->


                                            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">


                                            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">

                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="<?= BASE_URL; ?>/img/<?= $users['pImage']; ?>" alt="">
                                                </a>
                                            </td>
                                            <td><a href="#"><?= $users['pName']; ?></a>
                                            </td>
                                            <td>&nbsp;<?= $users['quantityToOrder']; ?></td>
                                            <td><?= $users['pPrice']; ?></td>
                                            <td>none</td>
                                            <td><input type="hidden" name="<?= $users['total']; ?>" id="total"><?= $users['total']; ?></td>

                                             <td><a href="<?= BASE_URL; ?>/Keranjang/delete/<?= $users['opId']; ?>"><i class="fa fa-trash-o" onclick="return confirm('Anda Yakin Untuk Menghapus Data <?= $users['pName']; ?> ?');"></i></a>
                                            </td>


                                            <td><input type="image" name="submit" class="fa fa" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"></td>

                                            
                                        </tr>
                                    </tbody>
                                    <?php  }?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <input type="text" id="or_total" class="form-control" placeholder="Total" readonly="">
                                            <?php foreach ($data['total'] as $total_order) {?>
                                            <th colspan="2">$&nbsp;<?= $total_order['hitung']; ?>&nbsp;USD</th>
                                            <?php  }?>
                                            <td id="or_total" value="or_total"></td>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    
                                    <button type="submit" class="btn btn-primary">Payment <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>NONE</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>NONE</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>NONE</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$.&nbsp;<?= $total_order['hitung']; ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
