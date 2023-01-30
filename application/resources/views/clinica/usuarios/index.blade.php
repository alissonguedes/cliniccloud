@extends('clinica.layouts.index')

@section('title', 'Usuários')

@section('search-label', 'Pesquisar Usuários')
@section('data-search', 'usuarios')
@section('json-datatable', 'true')

@section('btn-add-title','Adicionar Usuário')
@section('btn-add-icon', 'person_add_alt')
@section('btn-add-route', go('clinica.usuarios.add'))

@section('container')

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content scroller">
				<div class="card-body fixed-height">
					<div class="table grid bordered">
						<div class="grid-head">
							<div class="grid grid-row">
								<div class="grid-col" data-disabled="true" data-orderable="false">
									<label class="grey-text text-darken-2 font-14 left">
										<input type="checkbox" name="check-all" id="check-all" class="filled-in">
										<span></span>
									</label>
								</div>
								<div class="grid-col" data-order="asc">
									<span>Name</span>
								</div>
								<div class="grid-col">
									<span>Grupo</span>
								</div>
								<div class="grid-col">
									<span>Email</span>
								</div>
								<div class="grid-col">
									<span>Ultimo Login</span>
								</div>
								<div class="grid-col center-align">
									<span>Status</span>
								</div>
								<div class="grid-col center-align" data-disabled="true" data-orderable="false">
									<span>Ação</span>
								</div>
							</div>
						</div>
						<div class="grid grid-body">
							@include('clinica.usuarios.list')
						</div>
					</div>
					<style>
						.grid {
							display: grid;
						}

						.grid .grid-row {
							display: grid;
							grid-template-columns: 50fr 350fr 200fr 200fr 200fr 100fr 100fr;
						}

						.grid .grid-head .grid-col:not([data-orderable=false]) {
							cursor: pointer;
						}

						.grid .grid-head .grid-col {
							text-align: center;
							font-weight: bold;
							color: #000;
						}

						/*.grid .grid-head .grid-col {
								-webkit-user-select: none;
								-ms-user-select: none;
								user-select: none;
							}*/

						.grid .grid-row .grid-col {
							max-width: 100%;
							text-overflow: ellipsis;
							overflow: hidden;
							white-space: nowrap;
							position: relative;
							padding: 0px 15px;
							height: 50px;
							line-height: 50px;
						}

						.grid.bordered .grid-row {
							border-bottom-width: 1px;
							border-bottom-style: solid;
							border-bottom-color: var(--grey-accent-2);
						}

						.grid.bordered .grid-body .grid-row:last-child {
							border-bottom: none;
						}

						.grid .grid-col:first-child {
							text-align: center;
						}

						.grid .grid-col:first-child label {
							width: 20px;
							height: 50px;
						}

						.grid .grid-col:first-child label span {
							height: 15px;
						}

						.grid .grid-col:hover {
							max-width: 150%;
							white-space: nowrap;
						}

						.grid .grid-head .grid-col:not([data-orderable="false"]):before,
						.grid .grid-head .grid-col:not([data-orderable="false"]):after {
							content: '';
							position: absolute;
							right: 15px;
							width: 10px;
							height: 10px;
							border-width: 5px;
							border-style: solid;
							border-color: var(--blue-accent-1);
							overflow: hidden;
						}

						.grid .grid-head .grid-col:not([data-orderable="false"]):before {
							border-top-color: transparent;
							border-right-color: transparent;
							border-left-color: transparent;
							top: calc(50% - 12px);
						}

						.grid .grid-head .grid-col:not([data-orderable="false"]):after {
							border-bottom-color: transparent;
							border-right-color: transparent;
							border-left-color: transparent;
							bottom: calc(50% - 12px);
						}

						.grid .grid-head .grid-col[data-order="asc"]:not([data-orderable="false"]):before {
							border-bottom-color: var(--blue-darken-3);
						}

						/*							.grid .grid-head .grid-col[data-order="asc"]:not([data-orderable="false"]):after {
								border: none;
							}

							.grid .grid-head .grid-col[data-order="desc"]:not([data-orderable="false"]):before {
								border: none;
							}
							*/

						.grid .grid-head .grid-col[data-order="desc"]:not([data-orderable="false"]):after {
							border-top-color: var(--blue-darken-3);
						}
					</style>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
