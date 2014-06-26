
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
										<th>プロファイル名</th>
										<td colspan="3" ><span>{pr_name}</span>
										</td>
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
									<tr>
										<th>実施日</th>
										<td>{exec_date_start}</td>
										<td colspan="2">{exec_date_end}</td>
									</tr>
									
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

						<!-- btn-group-justified -->
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
						<!-- /.btn-group-justified -->
					</div>
					<!-- /.box-body -->

				</div>
				<!-- /. exec config -->


				<!-- vuls info -->
				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">診断結果</h3>
					</div>

					<!-- box-body -->
					<div class="box-body">

						<!-- btn-group-justified -->
						<div class="btn-group btn-group-justified">

						
							<!-- 一覧表示 -->
							<div class="btn-group">
								<button type="button" class="btn btn-default " >
									一覧表示 </span>
								</button>
							</div>
							<!-- /.一覧表示 -->

							<!-- ダウンロード -->
							<div class="btn-group">
								<button type="button" class="btn btn-default ">
									ダウンロード </span>
								</button>
							</div>
							<!-- /.ダウンロード -->
							
							
							<!-- データアップロード -->
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="modal" data-target="#myModal">
									データアップロード </span>
								</button>
							</div>
							<!-- /.データアップロード -->
							

							<!-- 							<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button> -->
						</div>
						<!-- /.btn-group-justified -->
					</div>
					<!-- /. box-body -->
					
				</div>
				<!-- /.vuls info -->

			</div>
			<!-- /.col (MAIN) -->

		</div>
	</section>
	<!-- /.content -->

	<!-- modal  -->
	<script>

	$(document).ready(function(){ 
		
		$('#myModal').on('show.bs.modal', function (e) {
			  if (!data) return e.preventDefault(); // stops modal from being shown
		}); 
		
		$('#myModal').modal();                      // initialized with defaults
		$('#myModal').modal({ keyboard: false });   // initialized with no keyboard
		$('#myModal').modal('show');
	}
	</script>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /.modal -->

</aside>
