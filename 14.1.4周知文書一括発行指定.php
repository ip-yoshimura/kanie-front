<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

<div class="col-xs-10 col-md-10   no-padding">

                <div class="col-md-12 col-xs-12 no-padding body-background">
                    <div class="head-p">
                        <p>周知文章一括発行指定</p>
                    </div>

                    <form id="meter" action="/gas/meter-reading" method="POST">
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">消費者範囲指定</p>
                        <div class="col-xs-12">

                            <div class="col-xs-1 no-padding">
                                <p>営業所コード</p>
                            </div>
                            <div class="col-xs-1   ">
                                <input type="radio" name="all" value="all"> <span>全て</span>
                            </div>
                            <div class="col-xs-1">
                                <input type="radio" name="custom" value="custom"> <span>選択</span>
                            </div>
                            <div class="col-xs-1">
                                <div class="form-group">
                                    <input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control"
                                        type="text" value="" />
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1">
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
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-12 ">
                                <div class="col-xs-1 no-padding">
                                    <p>自他社区分</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="all" value="all"> <span>全て</span>
                                </div>
                                <div class="col-xs-1">
                                    <input type="radio" name="directSales" value="directSales"> <span>直売</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="salesOutlet" value="salesOutlet"> <span>販売店</span>
                                </div>
                            </div>
                            <div class="col-xs-12  ">
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
                                <div class="col-xs-1">
                                    <input type="radio" name="directSales" value="directSales"> <span>地区</span>
                                </div>
                                <div class="col-xs-2">
                                    <input type="radio" name="salesOutlet" value="salesOutlet"> <span>営業担当者</span>
                                </div>
                            </div>
                            <div class="col-xs-12 no-padding ">
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
                                <div class="col-xs-1 no-padding">
                                    <input id="meterReadingClassification2" name="meterReadingClassification" type="radio"
                                           value="ハンディ" /><span> 全て</span>
                                </div>
                                <div class="col-xs-2">
                                    <input id="meterReadingClassification3" name="meterReadingClassification" type="radio"
                                           value="テレメ" /><span>閉栓・休止除く</span>
                                </div>
                                <div class="col-xs-3">
                                    <input id="meterReadingClassification3" name="meterReadingClassification" type="radio"
                                           value="テレメ" />く<span>閉栓・休止除</span>
                                </div>




                            </div>

                        </div>
                    </div>
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend"> 発行条件指定</p>
                        <div class="col-xs-12  ">


                            <div class="col-xs-1 no-padding">
                                <p>調査員</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="number" name="" class="form-control">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="col-xs-1 no-padding">
                                <p>保安機関</p>
                            </div>
                            <div class="col-xs-2">
                                <input type="number" name="" class="form-control">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" name="" class="form-control">
                            </div>

                        </div>

                        <div class="col-xs-12 border-margin">

                            <div class="col-xs-1 no-padding">
                                <p>検針指定</p>
                            </div>
                            <div class="col-xs-2">
                                <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> しない</span></div>
                                <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> する</span></div>

                            </div>
                            <div class="col-xs-1">
                                <p>検針日</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1 no-padding ratio">~</div>
                            <div class="col-xs-1" placeholder="z">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <p>検針者</p>
                            </div>
                            <div class="col-xs-1 no-padding">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1   ratio">~</div>
                            <div class="col-xs-3" placeholder="z">
                                <input type="text" class="form-control">
                            </div>


                        </div>

                        <div class="col-xs-12" style="margin-top:8px;">
                            <div class="col-xs-1 no-padding">
                                <p>対象法律</p>
                            </div>
                            <div class="col-xs-5">
                                <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 全て</span></div>
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 液石法</span></div>
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 高圧法</span></div>
                                <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> ガス事業法</span></div>

                            </div>
                            <div class="col-xs-1 ">
                                <p>並び順</p>
                            </div>
                            <div class="col-xs-5">
                                <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 検針順路順</span></div>
                                <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 検索名順</span></div>
                                <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 前回実施日順</span></div>


                            </div>
                        </div>
                    </div>
                        <div class="col-xs-12 border1 no-padding bottom-box">
                        <div class="col-xs-12 no-padding">
                            <p class="backend">発行消費者</p>
                            <div class="col-xs-7">
                                <table class="table table-bordered">
                                    <thead class="bg-color">
                                        <th></th>
                                        <th class="td-style">状況</th>
                                        <th class="td-style">更新日</th>
                                        <th class="td-style">実施者</th>
                                        <th class="td-style">実施保安機関</th>
                                        <th class="td-style">備考</th>


                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="td-style bg-color">1</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td class="td-style bg-color">2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td class="td-style bg-color">3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td class="td-style bg-color">4</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td class="td-style bg-color">5</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-5">
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        <p>消費者</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="radio">全て
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="radio">選択以外
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        <p>日付指定</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="radio">手入力
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="radio">検針日
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        <p>発行日</p>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control">
                                    </div>

                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        <p>消費者</p>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 手交</span></div>
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 配布</span></div>
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 郵送</span></div>
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> その他</span></div>


                                    </div>                                     
                                </div>
                                <div class="col-xs-12">
                                        <div class="col-xs-4">
                                            <p>月数</p>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-xs-2">
                                                 
                                            </div>
    
                                    </div>
                                    <div class="col-xs-12" style="margin-top:5px;">
                                            <div class="col-xs-4">
                                                <p>次回期限</p>
                                            </div>
                                            <div class="col-xs-8">
                                                <input type="text" class="form-control">
                                            </div>
                                             
        
                                        </div>
                            </div>

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