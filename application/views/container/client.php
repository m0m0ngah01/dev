
<!-- Right side column. Contains the navbar and content of the page -->
<aside
	class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header no-margin">
		<h1 class="text-center">Project Management {title}</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- MAILBOX BEGIN -->
		<div class="mailbox row">
			<div class="col-xs-12">
				<div class="box box-solid">
					<div class="box-body">
						<div class="row">

							<!-- 検索画面の挿入 -->
							<div class="col-md-3 col-sm-4">
								<div class="box-header">
									<i class="fa fa-inbox"></i>
									<h3 class="box-title">Client</h3>
								</div>

								<!-- Navigation - folders-->
								<div class=".pre-scrollable" style="margin-top: 15px;">
									<section class="sidebar">
										<!-- sidebar menu: : style can be found in sidebar.less -->
										<ul class="sidebar-menu">
											{comp_tree}
											<li class="treeview"><a href="#"> <span>{name}</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
											</li> 
											{/comp_tree}
											<li class="treeview"><a href="#"> <span>株式会社JALブランドコミュニケーション</span>
													<i class="fa fa-angle-left pull-right"></i>
											</a>
												<ul class="treeview-menu">
													<li><a href="charts/morris.html"> <span>TW201306M002.トランスコスモス</span>
															<i class="fa fa-angle-left pull-right"></i>
													</a>
													</li>
												</ul>
											</li>
											<li><a href="#"> <span>株式会社ツヴァイ</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
											</li>
											<li class="treeview"><a href="#"> <span>独立行政法人
														石油天然ガス・金属鉱物資源機構</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
												<ul class="treeview-menu">
													<li><a href="charts/morris.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201306M002.トランスコスモス</span>
													</a>
													</li>
													<li><a href="charts/flot.html"> <i
															class="fa fa-angle-double-right"></i>
															TW201307M004.アイエント-池田理化
													</a>
													</li>
													<li><a href="charts/inline.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201309M001.アイエント</span>
													</a>
													</li>
												</ul>
											</li>
											<li class="treeview"><a href="#"> <span>株式会社ネットフォレスト</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
												<ul class="treeview-menu">
													<li><a href="UI/buttons.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201307M002.JALブランドコミュニケーション</span>
													</a>
													</li>
													<li><a href="UI/sliders.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201310M003.ショーケース・ティービー-スマートフォン・コンバータ</span>
													</a>
													</li>
													<li><a href="UI/timeline.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201307M001.SHIFT-GESL</span>
													</a>
													</li>
												</ul>
											</li>
											<li class="treeview"><a href="#"> <span>トランスコスモス株式会社</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
												<ul class="treeview-menu">
													<li><a href="forms/general.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201308M002.ツヴァイ</span>
													</a>
													</li>
													<li><a href="forms/advanced.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201307S001.ネットフォレスト_ソフトエイジェンシー</span>
													</a>
													</li>
													<li><a href="forms/editors.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201307M003.dip-バイトルサイト</span>
													</a>
													</li>
												</ul>
											</li>
											<li class="treeview"><a href="#"> <span>エターメント株式会社</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
												<ul class="treeview-menu">
													<li><a href="examples/invoice.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201306M003.JOGMEC</span>
													</a>
													</li>
													<li><a href="examples/login.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201306M001.ゴルフダイジェスト・オンライン</span>
													</a>
													</li>
													<li><a href="examples/register.html"> <i
															class="fa fa-angle-double-right"></i> <span>TW201306M002.トランスコスモス</span>
													</a>
													</li>
												</ul>
											</li>
											<li class="treeview"><a href="#"> <span>株式会社池田理化</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
											</li>
											<li class="treeview"><a href="#"> <span>株式会社SHIF</span> <i
													class="fa fa-angle-left pull-right"></i>
											</a>
												<ul class="treeview-menu">
													<li><a href="examples/invoice.html"> <i
															class="fa fa-angle-double-right"></i> TW201306M003.JOGMEC
													</a>
													</li>
													<li><a href="examples/login.html"> <i
															class="fa fa-angle-double-right"></i>
															TW201306M001.ゴルフダイジェスト・オンライン
													</a>
													</li>
													<li><a href="examples/register.html"> <i
															class="fa fa-angle-double-right"></i>
															TW201306M002.トランスコスモス
													</a>
													</li>
												</ul>
											</li>
										</ul>
									</section>
								</div>
							</div>


							<div class="col-md-9 col-sm-8">
								<!-- /.row -->

								<div class="table-responsive">
									<!-- THE MESSAGES -->
									<table class="table">
										<thead>
											<tr>
												<th nowrap>履歴一覧</th>
												<th nowrap>名前</th>
												<th nowrap>ステータス</th>
												<th nowrap>スケジュール</th>
												<th nowrap>前回実行日</th>
												<th nowrap>検出件数</th>
												<th nowrap>操作</th>
											</tr>
										</thead>
										<tbody>
											<tr class=" " title="subprofile_id=1282">
												<td><a
													href="javascript:setActionTarget('form_subprofile_list', '/history_list/1282');">診断結果</a>
													</li>
												</td>
												<td><a
													href="javascript:setActionTarget('form_subprofile_list', '/subprofile_top/1282');">http://t-shops-eyado.knt.co.jp/</a>
												</td>
												<td class="center">-</td>
												<td class="center"></td>
												<td class="center">&nbsp;</td>
												<td class="center">&nbsp;</td>

												<td class="center"><a href="javascript:void(0);"
													onclick="return conformDialog('/audit_set_status/1282/1','診断設定を無効にしてもよろしいですか？');"
													title="診断設定を無効にします。自動クローリングや手動クローリング用プロキシも停止します。">無効</a>
												</td>
												<td class="center"><input type="button"
													name="button_audit_terminate" id="button_audit_terminate"
													value="緊急停止"
													onclick="return conformDialog('/audit_terminate/1282','診断を緊急停止してもよろしいですか？');" />
												</td>

											</tr>

										</tbody>
									</table>

								</div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.col (RIGHT) -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<div class="pull-right">
							<small>Showing 1-12/1,240</small>
							<button class="btn btn-xs btn-primary">
								<i class="fa fa-caret-left"></i>
							</button>
							<button class="btn btn-xs btn-primary">
								<i class="fa fa-caret-right"></i>
							</button>
						</div>
					</div>
					<!-- box-footer -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col (MAIN) -->
		</div>
		<!-- MAILBOX END -->
	</section>
	<!-- /.content -->
</aside>
