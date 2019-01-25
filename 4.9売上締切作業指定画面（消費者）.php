<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
			<div class="col-xs-10 col-md-10 col-xs-12 no-padding">

					<div class="col-md-12 col-xs-12 no-padding body-background">
                        <div class="head-p">
                            <p>売上締切作業指定画面（消費者）</p>
                        </div>
						<p></p>
						<form id="meter" action="/gas/meter-reading" method="POST">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="backend">消費者範囲指定</p>
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-12">
								<div class="col-xs-1 no-padding ">
									<p>営業所コード</p>
                                        
								</div>
								<div class="col-xs-1">
									<input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')"> 全て
								</div>
								<div class="col-xs-1  no-padding">
									<input type="radio" name="officeCodeSelection" id="officeCodeSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('officeCodeSelection', 'officeCodeSelectionId')">  選択
								</div>

                                    </div>
                                
							<div id="officeCodeSelectionId">
								<div class="col-xs-12">
									<div class="col-xs-1">
	
									</div>
									<div class="col-xs-1   ">
										<div class="form-group">
											<input id="officeCodeStartId" name="officeCodeStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('officeCodeStartId', 'officeCodeStartName')"/>
										</div>
									</div>
									<div class="col-xs-1 no-padding ratio">~</div>
									<div class="col-xs-1  no-padding">
										<div class="form-group">
											<input id="companyIdEndId" name="companyIdEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('companyIdEndId', 'companyIdEndName')"/>
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<input id="officeCodeStartName" name="officeCodeStartName" placeholder="Company 1" class="form-control" type="text" value="" disabled/>
										</div>
									</div>
									<div class="col-xs-1 no-padding ratio">~</div>
									<div class="col-xs-3">
										<div class="form-group">
											<input id="companyIdEndName" name="companyIdEndName" placeholder="Company 2" class="form-control" type="text" value="" disabled/>
										</div>
									</div>
								</div>
							</div>
                            
							<div class="col-xs-12">
								<div class="col-xs-12 no-padding">
									<div class="col-xs-1 no-padding">
										<p>受託区分</p>
									</div>
									<div class="col-xs-1">
										<input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> 全て
									</div>
									<div class="col-xs-1">
										<input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> 直売
									</div>
									<div class="col-xs-2">
										<input type="radio" name="trusteeshipSelection" id="trusteeshipSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('trusteeshipSelection', 'trusteeshipSelectionId')"> 販売店
									</div>
								</div>

							</div>
							<div id="trusteeshipSelectionId">
								<div class="col-xs-12">
                                    <div class="col-xs-1">
    
                                    </div>
                                    <div class="col-xs-1   ">
                                        <div class="form-group">
                                            <input id="trusteeshipStartId" name="trusteeshipStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeshipStartId', 'trusteeshipStartName')"/>
                                        </div>
                                    </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-1  no-padding">
                                        <div class="form-group">
                                            <input id="trusteeshipEndId" name="trusteeshipEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('trusteeshipEndId', 'trusteeshipEndName')"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="trusteeshipStartName" name="trusteeshipStartName" placeholder="Company 1" class="form-control" type="text" value="" disabled/>
                                        </div>
                                    </div>
                                <div class="col-xs-1 no-padding ratio">~</div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="trusteeshipEndName" name="trusteeshipEndName" placeholder="Company 2" class="form-control" type="text" value="" disabled/>
                                        </div>
                                    </div>
                                </div>
							</div>
                        
							<div class="col-xs-12">
								<div class="col-xs-12 no-padding">
									<div class="col-xs-1 no-padding">
										<p>出力区分</p>
									</div>
									<div class="col-xs-1">
										<input type="radio" name="outputSelection" id="outputSelection" value="all" checked onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> 全て
									</div>
									<div class="col-xs-1">
										<input type="radio" name="outputSelection" id="outputSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> 地区
									</div>
									<div class="col-xs-2">
										<input type="radio" name="outputSelection" id="outputSelection" value="custom" onclick="$.fn.radioButtonSelectionChanged('outputSelection', 'outputSelectionId')"> 営業担当者
									</div>

								</div>
								<div id="outputSelectionId">
									<div class="col-xs-12 no-padding">
										<div class="col-xs-1 col-xs-offset-1">
											<div class="form-group">
												<input id="outputStartId" name="outputStartId" placeholder="000" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputStartId', 'outputStartName')"/>
											</div>
										</div>
										<div class="col-xs-1 no-padding ratio">~</div>
										<div class="col-xs-1">
											<div class="form-group">
												<input id="outputEndId" name="outputEndId" placeholder="999" class="form-control" type="text" value="" disabled onchange="$.fn.onInputValueChange('outputEndId', 'outputEndName')"/>
											</div>
										</div>
										<div class="col-xs-3">
											<div class="form-group">
												<input id="outputStartName" name="outputStartName" class="form-control" type="text" value="" disabled/>
											</div>
										</div>
										<div class="col-xs-1 no-padding ratio">~</div>
										<div class="col-xs-3">
											<div class="form-group">
												<input id="outputEndName" name="outputEndName" class="form-control" type="text" value="" disabled/>
											</div>
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
										<input id="consumerCodeStart" name="consumerCodeStart" placeholder="0" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumerCodeStartName')"/>
									</div>
								</div>
                                <div class="col-xs-1 no-padding ratio">~</div>
								<div class="col-xs-2">
									<div class="form-group">
										<input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumeCodeEnd', 'consumerCodeEndName')"/>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control" type="text" value=""/>
									</div>
								</div>
                                <div class="col-xs-1 no-padding ratio">~</div>
								<div class="col-xs-3">
									<div class="form-group">
										<input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text" value=""/>
									</div>
								</div>
							</div>



</div>
                            </div>


                            <div class="col-xs-12 border1 no-padding bottom-box ">
                            <p class="backend">
                                締切範囲指定</p>
                                <div class="col-xs-12 border-margin-bottom">
                                    <div class="col-xs-1 no-padding">
                                          <p>締切日</p>
                                    </div>
                                    <div class="col-xs-1">
                                        <input type="text" class="form-control" placeholder="3">
                                    </div>
                                    <div class="col-xs-1" style="margin-top:10px;">
                                       <span>日</span>
                                    </div>

                                </div>


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