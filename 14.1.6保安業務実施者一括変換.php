<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
        <div class="col-xs-10 col-md-10 col-xs-10 no-padding">

                <div class="col-md-12 col-xs-12 no-padding body-background">
                    <div class="head-p">
                        <p>保安業務実施者一括変更</p>
                    </div>

                    <form id="meter" action="/gas/meter-reading" method="POST">
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">消費者範囲指定</p>
                        <div class="col-xs-12">

                            <div class="col-xs-1 no-padding">
                                <p>営業所コード</p>
                            </div>
                            <div class="col-xs-1 ">
                                <input type="radio" name="all" value="all"> <span>全て</span>
                            </div>
                            <div class="col-xs-1  no-padding">
                                <input type="radio" name="custom" value="custom"> <span>選択</span>
                            </div>
                            <div class="col-xs-1   ">
                                <div class="form-group">
                                    <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1   ">
                                <div class="form-group">
                                    <input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1"
                                        class="form-control" type="text" value="" />
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding ">
                                <div class="col-xs-1 no-padding">
                                    <p>自他社区分</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="all" value="all"> <span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="directSales" value="directSales"> <span>直売</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="salesOutlet" value="salesOutlet"> <span>販売店</span>
                                </div>
                            </div>
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                            type="text" value="" />
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                            type="text" value="" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="trustStartName" name="trustStartName" class="form-control" type="text"
                                            value="" />
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                            value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 no-padding">
                                    <p>レーベル</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="all" value="all"> <span>全て</span>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="radio" name="directSales" value="directSales"> <span>地区</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="salesOutlet" value="salesOutlet"> <span>営業担当者</span>
                                </div>
                            </div>
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-1 col-xs-offset-1">
                                    <div class="form-group">
                                        <input id="outputStartId" name="outputStartId" placeholder="000" class="form-control"
                                            type="text" value="" />
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input id="outputEndId" name="outputEndId" placeholder="999" class="form-control"
                                            type="text" value="" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="outputStartName" name="outputStartName" class="form-control" type="text"
                                            value="" />
                                    </div>
                                </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <input id="outputEndName" name="outputEndName" class="form-control" type="text"
                                            value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-1 no-padding">
                                <p>消費者コード</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">

                            <div class="col-xs-1 no-padding">
                                <p>入居状況</p>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1 no-padding"><input type="radio" id="" name=""><span> 全て</span></div>
                                <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 閉栓・休止除く</span></div>
                                <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 閉栓・休止除く</span></div>

                            </div>

                        </div>
                    </div>
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">変更指定</p>
                        <div class="col-xs-12" style="margin-top:8px;">

                            <div class="col-xs-1 no-padding">
                                <p>対象業務</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 全て</span></div>
                                <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 選択</span></div>

                            </div>

                            <div class="col-xs-1 no-padding">
                                <p>開始</p>
                                
                            </div>
                            <div class="col-xs-1">
                                <input type="number" class="form-control" >
                            </div>
                            <div class="col-xs-1  ">
                                    <p>交換</p>
                                    
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1  ">
                                        <p>供給</p>
                                        
                                    </div>
                                    <div class="col-xs-1">
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-xs-1 no-padding">
                                            <p>消費者</p>
                                            
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="number" class="form-control">
                                        </div>
                             
                           
                           
                         </div>

                         <div class="col-xs-12 border-margin-bottom border-margin">

                                <div class="col-xs-2">
                                    
                                </div>
                             <div class="col-xs-1">

                             </div>
    
                                <div class="col-xs-1 no-padding">
                                    <p>周知</p>
                                    
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                        <p>周知</p>
                                        
                                    </div>
                                    <div class="col-xs-1">
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-xs-1">
                                            <p>対応</p>
                                            
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-xs-2 no-padding">
                                            <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 選択</span></div>
                                            <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 除く</span></div>

                                            </div>
                                             
                                 
                               
                               
                             </div>
                        </div>
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">
                                変更前調査員 </p>
                        <div class="col-xs-12">

                                    <div class="col-xs-1 no-padding border-margin-bottom">
                                        <p>調査員</p>
                                    </div>
                            <div class="col-xs-1">
                                <input type="text" class="form-control">
                            </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-xs-1 no-padding">
                                        <p>保安機関</p>
                                    </div>
                                    <div class="col-xs-1">
                                        <input type="text" class="form-control" placeholder="999">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                    </div>


                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">
                                変更後調査員 </p>
                                <div class="col-xs-12 border-margin-bottom" >

                                        <div class="col-xs-1 no-padding">
                                            <p>調査員</p>
                                        </div>
                                    <div class="col-xs-1">
                                        <input type="text" class="form-control">
                                    </div>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-xs-1 no-padding">
                                            <p>調査員</p>
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" class="form-control" placeholder="999">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                        </div>

                                    <div class="col-xs-12 bottom-box no-padding"  >
                                             
                                            <div class="col-xs-1 no-padding">
                                                <p>登録訂正日</p>
                                            </div>
                                            <div class="col-xs-4">
                                                    <input type="text" class="form-control">
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