<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

<div class="col-xs-10 col-md-10  no-padding ">

    <div class="col-md-12 col-xs-12 no-padding head-color body-background">
        <div class="head-p">
            <p>
                ユーザ別環境設定

            </p>
        </div>
                    <form id="meter" action="/gas/meter-reading" method="POST">
                        <div class="col-xs-6 border1 no-padding">
                            <p class="backend">個別伝票入力</p>
                            <div class="col-xs-12">
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-4">
                                    自動切替
                                </div>
                                <div class="col-xs-4">
                                    切替順序
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin" style="">
                                <div class="col-xs-3">
                                    <p>検針伝票</p>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:しない">1:しない </option>
                                        <option value="2:する">2:する</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:消費者コード ">1:消費者コード  </option>
                                        <option value="2:検針順路">2:検針順路</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin ">
                                <div class="col-xs-3">
                                    <p>容器交換票</p>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:しない">1:しない </option>
                                        <option value="2:する">2:する</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:消費者コード ">1:消費者コード  </option>
                                        <option value="2:検針順路">2:検針順路</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-3">
                                    <p>検配同時伝票</p>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:しない">1:しない </option>
                                        <option value="2:する">2:する</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:消費者コード ">1:消費者コード  </option>
                                        <option value="2:検針順路">2:検針順路</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-3">
                                    <p>売上伝票</p>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:しない">1:しない </option>
                                        <option value="2:する">2:する</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin  border-margin-bottom">
                                <div class="col-xs-3">
                                    <p>入金伝票</p>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:しない">1:しない </option>
                                        <option value="2:する">2:する</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:消費者コード ">1:消費者コード  </option>
                                        <option value="2:検針順路">2:検針順路</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-6  ">
                            <div class="col-xs-12 border1 no-padding">
                            <p class="backend">連続伝票入力</p>


                            <div class="col-xs-12">
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-4">
                                        自動表示


                                </div>
                                <div class="col-xs-4">
                                        切替順序
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-3">
                                    <p>検針伝票</p>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:しない">1:しない </option>
                                        <option value="2:する">2:する</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:消費者コード ">1:消費者コード  </option>
                                        <option value="2:検針順路">2:検針順路</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin border-margin-bottom">
                                <div class="col-xs-3">
                                    <p>入金伝票</p>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:しない">1:しない </option>
                                        <option value="2:する">2:する</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option value="1:消費者コード ">1:消費者コード  </option>
                                        <option value="2:検針順路">2:検針順路</option>
                                    </select>
                                </div>
                            </div>
 
                           

</div>
                        </div>
                    </form>

                </div>

                <?php
                include "footer.php"
                ?>

                </form>

        </div>
    </div>
    </div>

</body>

</html>