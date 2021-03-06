
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header no-margin">
		<h1 class="text-center">Sub Profile Page</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-xs-12">

				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">Sub Profile</h3>
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
										<th>Sub プロファイル名</th>
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

				<!-- exec config -->
				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">診断</h3>
					</div>

					<div class="box-body">
						<div class="btn-group btn-group-justified">

							<!-- ログイン設定 -->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									ログイン設定 </span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/login_setting_basic_parameter_input');" /><span>ベーシック認証設定</span>
										</a></li>
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/login_setting_url_input');" /><span>フォーム認証設定</span> </a>
									</li>
								</ul>
							</div>
							<!-- /.ログイン設定 -->

							<!-- クローリング設定 -->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									クローリング設定 </span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/target_url_select');" /><span>手動アップロード</span> </a>
									</li>
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/target_url_tree');" /><span>ツリークローリング</span> </a>
									</li>
									<li><a class="exclude_mask" href="javascript:void(0);"
											onclick="return conformDialogWithForm('form_dummy', '/crawling_auto','自動クローリングを開始してもよろしいですか？。',false);">自動クローリング</a></li>
								</ul>
							</div>
							<!-- /.クローリング設定 -->

							<!-- 診断 -->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									診断 </span>
								</button>
								<ul class="dropdown-menu">
									<li><a class="audit_start_link exclude_mask" href="javascript:void(0);"
											onclick="var retval=check_group_license(1222);if(retval) return conformDialogWithForm('form_dummy', '/audit_start','グループライセンスを使用します。開始してもよろしいですか？',false); else return conformDialogWithForm('form_dummy', '/audit_start','診断開始してもよろしいですか?',false);">スキャン開始</a>
									</li>

									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy','/csrf_audit');">
											<span>CSRF診断</span>
										</a></li>
								</ul>
							</div>
							<!-- /.診断 -->

							<!-- オプション設定 -->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									オプション設定 </span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/target_url_select');" /><span>対象URL確認・選択</span> </a></li>
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/category_select');" /><span>診断カテゴリ設定</span> </a></li>
									<li class="rightlink"><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/audit_config_edit/1220');" /><span>オプション設定</span>
										</a></li>
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/schedule_list/1222');" /><span>スケジュール設定</span> </a></li>
									<li><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/sendmail_list/1222');" /><span>メール送信設定</span> </a></li>
									<li class="rightlink"><a href="javascript:void(0);" onclick="javascript:setActionTarget('form_dummy', '/crawling_url_input');" /><span>アクセス除外・追加設定</span>
										</a></li>
								</ul>
							</div>
							<!-- /.オプション設定 -->

						</div>
					</div>

				</div>
				<!-- /. exec config -->

				
				<!-- vuls info -->
				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">診断結果一覧</h3>
					</div>

					<div class="box-body">
					
					</div>

				</div>
				<!-- /.vuls info -->
				
				
			</div>
			<!-- /.col (MAIN) -->
		</div>
	</section>
	<!-- /.content -->
</aside>
