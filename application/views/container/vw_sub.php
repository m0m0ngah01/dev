
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header no-margin">
		<h1 class="text-center">Project Management</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
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
											<li class="treeview"><a href="#">
													<span>{name}</span> <i class="fa fa-angle-left pull-right"></i>
												</a>
												<ul class="treeview-menu">
													<li><a href="top">
															<span>{p_name}</span> <i class="fa fa-angle-left pull-right"></i>
														</a>
													</li>
												</ul>
											</li> {/comp_tree}
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
												<th rowspan="2">No.</th>
												<th nowrap rowspan="2">診断ID</th>
												<th nowrap rowspan="2">診断名</th>
												<th nowrap class="status_th" rowspan="2">ステータス</th>
												<th rowspan="2">診断</th>
												<th class="t15" nowrap rowspan="2">オープン<br />ポート
												</th>
												<th colspan="7">検出件数</th>
											</tr>
											<tr>
												<td class="level_e">緊急</td>
												<td class="level_c">重大</td>
												<td class="level_h">高</td>
												<td class="level_m">中</td>
												<td class="level_l">低</td>
												<td class="level_i">情報</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>1</th>
												<td class="center ids">5204</td>
												<td title="http://stg.kurihaku.jp/" nowrap><a href="/vulnerability_list/5204" title="TW201306M002.トランスコスモス">TW201306M002.トランスコスモス</a>
												</td>
												<td nowrap class="center status_td"><input type="hidden" id="status_id5204" value="27"></input> <span class="status_ja5204">終了</span>
												</td>
												<td nowrap class="audit_time"><a href="/vulnerability_list/5204" title="診断結果詳細へ">
														開始&nbsp;2014/05/30 (金) 01:20:05<br /> 終了&nbsp;2014/05/30 (金) 01:20:26
													</a>
												</td>
												<td class="center">-</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
											</tr>
											<tr>
												<th>2</th>
												<td class="center ids">5203</td>
												<td titel="http://stg1.dsp.co.jp/" nowrap><a href="/vulnerability_list/5203" title="TW201306M002.トランスコスモス">TW201306M002.トランスコスモス</a>
												</td>
												<td nowrap class="center status_td"><input type="hidden" id="status_id5203" value="27"></input> <span class="status_ja5203"> 終了 </span>
												</td>
												<td nowrap class="audit_time"><a href="/vulnerability_list/5203" title="診断結果詳細へ">
														開始&nbsp;2014/05/30 (金) 01:10:03<br /> 終了&nbsp;2014/05/30 (金) 01:10:24
													</a>
												</td>
												<td class="center">-</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
												<td class="center">0</td>
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
	</section>
	<!-- /.content -->
</aside>
