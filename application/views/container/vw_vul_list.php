
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header no-margin">
		<h1 class="text-center">診断結果一覧</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-xs-12">

				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">診断結果一覧</h3>
					</div>

					<!-- profile header -->
					<div class="box-body">

						<div class="table-responsive">
							<table class="table">
								<thead></thead>
								<tbody>
									<tr>
										<th>プロファイル</th>
										<td colspan="3"><a href="{base_url}/pro/{pr_id}">{pr_name}</a>
										</td>
									</tr>
									<tr>
										<th>Sub プロファイル</th>
										<td colspan="3"><a href="{base_url}/sub/{sub_id}">{sub_name}</a>
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

				<!-- Webアプリケーション -->
				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">Webアプリケーション</h3>
					</div>

					<div class="box-body">
						<!-- table-responsive -->
						<div class="table-responsive">
							<table id="sorttable" class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>指摘項目</th>
										<th>レベル</th>
										<th>検出件数</th>
										<th colspan="2">操作</th>
									</tr>
								</thead>
								<tbody>
									{web_list}
									<tr>
										<td>1</td>
										<td><a href="vul/detail/{vul_id}">{web_vul_name}</a></td>
										<td class="center">{web_vul_level}</td>
										<td class="center">{web_vul_count}</td>
										<td class="setting_info_btn center"><a href="sub/vul_edit/{vul_id}">編集</a></td>
										<td class="setting_info_btn center"><a href="sub/vul_del_conf/{pr_id}">削除</a>
										</td>
									</tr>
									{/web_list}
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>

				</div>
				<!-- /. Webアプリケーション -->

				<!-- ネットワーク -->
				<div class="box box-success ">
					<div class="box-header">
						<i class="fa fa-inbox"></i>
						<h3 class="box-title">ネットワーク</h3>
					</div>

					<div class="box-body">
						<!-- table-responsive -->
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>指摘項目</th>
										<th>レベル</th>
										<th>検出件数</th>
										<th colspan="2">操作</th>
									</tr>
								</thead>
								<tbody>
									{net_list}
									<tr>
										<td>2</td>
										<td><a href="vul/detail{vul_id}">{net_vul_name}</a></td>
										<td class="center">{net_vul_level}</td>
										<td class="center">{net_vul_count}</td>
										<td class="setting_info_btn center"><a href="sub/vul_edit/{vul_id}">編集</a></td>
										<td class="setting_info_btn center"><a href="sub/vul_del_conf/{pr_id}">削除</a>
										</td>
									</tr>
									{/net_list}
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>

				</div>
				<!-- /.ネットワーク -->

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
