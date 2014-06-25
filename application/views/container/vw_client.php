
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header no-margin">
		<h1 class="text-center">Client Page</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-xs-12">

				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">User</h3>
					</div>

					<!-- profile header -->
					<div class="box-body">
						<div class="table-responsive">
							<table id="profile_top" class="table">
								<thead>
								</thead>
								<tbody>
									<tr>
										<th>企業名</th>
										<td colspan="3">{cl_name}</td>
									</tr>
									<tr>
										<th>住所</th>
										<td colspan="3">{address}</td>
									</tr>
									<tr>
										<th>担当者</th>
										<td>{owner}</td>
										<td class="setting_info_btn center"><a href="/profile_edit/{pr_id}">編集</a>
										</td>
										<td class="setting_info_btn center"><a href="/profile_del_conf/{pr_id}">削除</a>
										</td>
									</tr>
									<tr>
										<th>HP</th>
										<td colspan="3"><a href="{link}">{link}</a></td>
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
						<h3 class="box-title">プロファイル一覧</h3>
					</div>

					<div class="box-body">
						<form name="form_profile_list" id="form_profile_list" method="POST" action="">
							<div style='display: none'>
								<input type='hidden' name='csrfmiddlewaretoken' value='e098710292b999c91e856b2899a83d82' />
							</div>

							<!-- //TODO implement filter function -->
							<div class="form-group input-group-sm">
								フィルタ : <input type="text" class="form-control" placeholder="filter_input">
							</div>

							<div class="table-responsive">
								<table id="sorttable" class="table">
									<thead>
										<tr>
											<th>No.</th>
											<th>名前</th>
											<th>ステータス</th>
											<th>予定日</th>
											<th>実施日</th>
											<th>検出件数</th>
											<th colspan="2">操作</th>
										</tr>
									</thead>
									<tbody>
										{pr_list}
										<tr>
											<td>1</td>
											<td><a href="../../pro/{pr_id};">{pr_name}</a>
											</td>
											<td class="center">{pr_status}</td>
											<td class="center">{pre_start_date}</td>
											<td class="center">&nbsp;{start_date}</td>
											<td class="center">&nbsp;{error_count}</td>
											<td class="center"><a href="javascript:void(0);" onclick="return conformDialog('/audit_set_status/1222/9','診断設定を無効にしてもよろしいですか？');"
													title="診断設定を無効にします。自動クローリングや手動クローリング用プロキシも停止します。">無効</a>
											</td>
											<td class="center"><input type="button" name="button_audit_terminate" id="button_audit_terminate" value="緊急停止"
												onclick="return conformDialog('/audit_terminate/1222','診断を緊急停止してもよろしいですか？');" />
											</td>
										</tr>
										{/pr_list}
									</tbody>
								</table>
							</div>
						</form>

						<div class="operation">

							<!-- //TODO implemet add function -->
							<input type="button" name="button_profile_edit" id="button_profile_edit" value="新規登録"
								onclick="setActionTarget('form_profile_list', '/profile_edit/{pr_id}');" />
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
