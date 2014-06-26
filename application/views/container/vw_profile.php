
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header no-margin">
		<h1 class="text-center">Profile Page</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-xs-12">

				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">Profile</h3>
					</div>

					<!-- profile header -->
					<div class="box-body">
						<div class="table-responsive">
							<table id="subprofile_top" class="table">
								<thead></thead>
								<tbody>
									<tr>
										<th>プロファイル名</th>
										<td><span>{pr_name}</span>
										</td>

										<td class="setting_info_btn center"><a href="/profile_edit/{pr_id}">編集</a>
										</td>
										<td class="setting_info_btn center"><a href="/profile_del_conf/{pr_id}">削除</a>
										</td>
									</tr>

									<tr>
										<th>診断期間（仮）</th>
										<td>{pre_start}</td>
										<td colspan="2">{pre_end}</td>
									</tr>

									<tr>
										<th>診断期間</th>
										<td>{start}</td>
										<td colspan="2">{end}</td>
									</tr>

									<tr>
										<th>診断担当者</th>
										<td colspan="3">{executor}</td>
									</tr>

									<tr>
										<th>画面数</th>
										<td colspan="3">{view_count}</td>
									</tr>

									<tr>
										<th rowspan="{webs_count}">Webアプリケーション</th>
									</tr>
									{webs}
									<tr>
										<td colspan="3">{web}</td>
									</tr>
									{/webs}


									<tr>
										<th rowspan="{network_count}">ネットワーク</th>
									</tr>
									{network}
									<tr>
										<td colspan="3">{ip}</td>
									</tr>
									{/network}

									<tr>
										<th>診断手法</th>
										<td colspan="3">{way}</td>
									</tr>

									<tr>
										<th>診断場所</th>
										<td colspan="3">{location}</td>
									</tr>

									<tr>
										<th>診断元IP</th>
										<td colspan="3">{connect_ip}</td>
									</tr>

									<tr>
										<th>クライアント担当者</th>
										<td colspan="3">{owner}</td>
									</tr>

									<tr>
										<th>総評</th>
										<td colspan="3">{review}</td>
									</tr>

									<tr>
										<th>その他・注意事項</th>
										<td colspan="3">{etc}</td>
									</tr>

								</tbody>
								<tfoot></tfoot>
							</table>
						</div>
					</div>
				</div>
				<!-- /.profile header -->

				<!-- profile info -->
				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">サブプロファイル一覧</h3>
					</div>

					<div class="box-body">

						<form name="form_subprofile_list" id="form_subprofile_list" method="POST" action="">
							<div style='display: none'>
								<input type='hidden' name='csrfmiddlewaretoken' value='e098710292b999c91e856b2899a83d82' />
							</div>

							<div class="form-group input-group-sm">
								フィルタ : <input type="text" class="form-control" placeholder="filter_input">
							</div>

							<div class="table-responsive">
								<table id="sorttable" class="table">
									<thead>
										<tr>
											<th>詳細</th>
											<th>名前</th>
											<th>ステータス</th>
											<th>実行日</th>
											<th colspan="2"></th>

											<!-- 											<th>検出件数</th> -->
											<!-- 											<th colspan="2">操作</th> -->
										</tr>
									</thead>
									<tbody>
										{sub_list}
										<tr class=" " title="sub_id={sub_id}">
											<td>診断結果</td>
											<td><a href="sub/{sub_id}">{sub_name}</a></td>
											<td class="center">緊急停止</td>
											<td class="center">&nbsp;</td>

											<td class="setting_info_btn center"><a href="/profile_edit/{pr_id}">編集</a>
											</td>
											<td class="setting_info_btn center"><a href="/profile_del_conf/{pr_id}">削除</a>
											</td>

											<!--											<td class="center"><a href="javascript:void(0);" onclick="return conformDialog('/audit_set_status/{sub_id}/9','診断設定を無効にしてもよろしいですか？');"
													title="診断設定を無効にします。自動クローリングや手動クローリング用プロキシも停止します。">無効</a>
 											</td> -->
											<!-- 											<td class="center"><input type="button" name="button_audit_terminate" id="button_audit_terminate" value="緊急停止" 
												onclick="return conformDialog('/audit_terminate/{sub_id}','診断を緊急停止してもよろしいですか？');" />-->
											<!-- 											</td> -->
										</tr>
										{/sub_list}
									</tbody>
								</table>
							</div>


						</form>

					</div>

					<div class="box-footer clearfix">
						<div class="pull-right">{pagination}</div>
					</div>

				</div>
				<!-- /.profile info -->

			</div>
			<!-- /.col (MAIN) -->
		</div>
	</section>
	<!-- /.content -->
</aside>
