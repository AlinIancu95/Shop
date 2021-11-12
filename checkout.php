<?php

include "parts/header.php";

?>
    <div class="row">
        <div class="col-12 mt-5 mb-2">
            <h2>Checkout cart</h2>
            <form method="post" action="processCheckout.php">
                <?php if (getAuthUser()): ?>
                    <div class="form-group">
                        <label for="address_id">Address</label>
                        <select class="form-control" id="address_id" name="order[addressId]">
                            <option value="">Adauga adresa noua</option>
                            <?php foreach (getAuthUser()->getAddresses() as $address): ?>
                                <option value="<?php $address->getId(); ?>"><?php echo $address->address ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>
                <div id="addAddress">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input class="form-control" id="firstName" name="address[firstName]" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input class="form-control" id="lastName" name="address[lastName]" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" id="phone" name="address[phone]" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input class="form-control" id="city" name="address[city]" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select class="form-control" id="state" name="address[state]">
                            <option value="Dolj">Dolj</option>
                            <option value="Olt">Olt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address[address]" placeholder="Address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="shipping_method">Shipping Method</label>
                    <select class="form-control" id="shipping_method" name="order[shippingMethod]">
                        <option value="posta">Posta romana</option>
                        <option value="curier">Fan Courier</option>
                        <option value="ridicare">Rdicare personala</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="payment_method">Payment Method</label>
                    <select class="form-control" id="payment_method" name="order[paymentMethod]">
                        <option value="ramburs">Ramburs</option>
                        <option value="card">Card</option>
                        <option value="op">OP</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Finalize</button>
                </div>

            </form>

        </div>
    </div>
    <script>
        $('#address_id').on('change', function (){
            if ($('#address_id').val() > 0){
                $('#addAddress').css('display','none');
            } else {
                $('#addAddress').css('display','block');
            }
        });
    </script>

<?php include "parts/footer.php"; ?>