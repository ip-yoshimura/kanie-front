<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
        <div class="col-xs-10 col-md-10   no-padding body-background">
            <div class="head-p">
                <p>保安担当者（調査員）一括変更</p>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="backend">変更前調査員 </p>
            <div class="col-xs-12 border-margin-bottom">

                    <div class="col-xs-1 no-padding">
                        <p>調査員</p>
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-1 no-padding">
                        <p>保安機関</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="999" name="securityId" id="securityId" value=""
                        onchange="$.fn.onInputValueChange('securityId', 'securityName')">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" Name="securityName" id="securityName" value="">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 border1 no-padding ">
                <p class="backend">変更前調査員 </p>
                <div class="col-xs-12 border-margin-bottom">

                    <div class="col-xs-1 no-padding">
                        <p>調査員</p>
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-1 no-padding">
                        <p>保安機関</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="999" name="security_2Id" id="security_2Id" value=""
                        onchange="$.fn.onInputValueChange('security_2Id', 'security_2Name')">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" name="security_2Name" id="security_2Name" value="">
                    </div>
                </div>



                <!--Last-->

                <?php
                include "footer.php"
                ?>

                </form>

        </div>
    </div>
    </div>

</body>

</html>