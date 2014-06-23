
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


							<div class="col-md-3 col-sm-4">
								<div class="box-header">
									<i class="fa fa-inbox"></i>
									<h3 class="box-title">Client</h3>
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
											{pr_detail_tree}
											<tr class=" " title="subprofile_id=1282">

												<td><a href="javascript:setActionTarget('form_subprofile_list', '/history_list/1282');">診断結果</a>
													</li>
												</td>
												<td><a href="javascript:setActionTarget('form_subprofile_list', '/subprofile_top/1282');">http://t-shops-eyado.knt.co.jp/</a>
												</td>
												<td class="center">-</td>
												<td class="center"></td>
												<td class="center">&nbsp;</td>
												<td class="center">&nbsp;</td>

												<td class="center"><a href="javascript:void(0);" onclick="return conformDialog('/audit_set_status/1282/1','診断設定を無効にしてもよろしいですか？');"
														title="診断設定を無効にします。自動クローリングや手動クローリング用プロキシも停止します。">無効</a>
												</td>
												<td class="center"><input type="button" name="button_audit_terminate" id="button_audit_terminate" value="緊急停止"
													onclick="return conformDialog('/audit_terminate/1282','診断を緊急停止してもよろしいですか？');" />
												</td>
											</tr>
											{/pr_detail_tree}

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
