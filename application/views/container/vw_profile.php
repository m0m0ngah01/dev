
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
										<th>担当者</th>
										<td colspan="3">{pr_owner}</td>
									</tr>
									<tr>
										<th>プロファイル名</th>
										<td><a href="<= base_url() =>/sub/{pr_id}">{pr_name}</a>
										</td>

										<td class="setting_info_btn center"><a href="/profile_edit/{pr_id}">編集</a>
										</td>
										<td class="setting_info_btn center"><a href="/profile_del_conf/{pr_id}">削除</a>
										</td>
									</tr>
									{pr_urls}
									<tr>
										<th>URL</th>
										<td colspan="3">{url}</td>
									</tr>
									{/pr_urls}
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
											<th>履歴一覧</th>
											<th>名前</th>
											<th>ステータス</th>
											<th>スケジュール</th>
											<th>前回実行日</th>
											<th>検出件数</th>
											<th colspan="2">操作</th>
										</tr>
									</thead>
									<tbody>
										{sub_list}
										<tr class=" " title="sub_id={sub_id}">
											<td><a href="javascript:setActionTarget('form_sub_list', '/sub_history/{sub_id}');">診断結果</a>
											</td>
											<td><a href="javascript:setActionTarget('form_sub_list', '/sub/{sub_id}');">{sub_name}</a>
											</td>
											<td class="center">緊急停止</td>
											<td class="center"></td>
											<td class="center">&nbsp;</td>
											<td class="center">&nbsp;</td>
											<td class="center"><a href="javascript:void(0);" onclick="return conformDialog('/audit_set_status/{sub_id}/9','診断設定を無効にしてもよろしいですか？');"
													title="診断設定を無効にします。自動クローリングや手動クローリング用プロキシも停止します。">無効</a>
											</td>
											<td class="center"><input type="button" name="button_audit_terminate" id="button_audit_terminate" value="緊急停止"
												onclick="return conformDialog('/audit_terminate/{sub_id}','診断を緊急停止してもよろしいですか？');" />
											</td>
										</tr>
										{/sub_list}
									</tbody>
								</table>
							</div>
						</form>

						<div class="operation">
							<input type="button" name="button_subprofile_edit" id="button_subprofile_edit" value="新規登録"
								onclick="setActionTarget('form_subprofile_list', '/subprofile_edit/{pr_id}');" />
						</div>
					</div>

					<div class="box-footer clearfix">
						<div class="pull-right">
							{pagination}
						</div>
					</div>
					
				</div>
				<!-- /.profile info -->

			</div>
			<!-- /.col (MAIN) -->
		</div>
	</section>
	<!-- /.content -->
</aside>