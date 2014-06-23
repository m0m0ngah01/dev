
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

							<div class="box-header">
								<i class="fa fa-inbox"></i>
								<h3 class="box-title">Client</h3>
							</div>

							<div class="table-responsive">
								<!-- THE MESSAGES -->
								<table class="table">
									<thead>
										<tr>
											<th rowspan="2">No.</th>
											<!-- 												<th nowrap rowspan="2">診断ID</th> -->
											<th nowrap rowspan="2">診断名</th>
											<th rowspan="2">診断期間</th>
											<th nowrap class="status_th" rowspan="2">ステータス</th>

											<!-- 												<th class="t15" nowrap rowspan="2">オープン<br />ポート -->
											<!-- 												</th> -->
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
										{pr_list}
										<tr>
											<th>1</th>
											<td title="{pr_url}" nowrap><a href="/vulnerability_list/{p_id}" title="{p_name}">{p_name}</a>
											</td>
											<td nowrap class="audit_time"><a href="/vulnerability_list/{p_id}" title="診断結果詳細へ">
													予定開始&nbsp;{pre_start_date}&emsp;開始&nbsp;{start_date} <br /> 予定終了&nbsp;{pre_end_date}&emsp;終了&nbsp;{end_date}
												</a>
											</td>
											<td nowrap class="center status_td"><input type="hidden" id="status_id5204" value="27"></input> <span class="status_ja5204">{status}</span>
											</td>
											<td class="center">0</td>
											<td class="center">0</td>
											<td class="center">0</td>
											<td class="center">0</td>
											<td class="center">0</td>
											<td class="center">0</td>
										</tr>
										{/pr_list}
									</tbody>
								</table>

							</div>
							<!-- /.table-responsive -->

						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<div class="pull-right">
							{pagination}
							<!-- 							<small>Showing 1-12/1,240</small> -->
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
