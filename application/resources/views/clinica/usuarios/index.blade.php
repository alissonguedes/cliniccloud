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
			<div class="card-content">
				<div class="card-body">
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
									<span class="direction">Name</span>
								</div>
								<div class="grid-col">
									<span class="direction">Grupo</span>
								</div>
								<div class="grid-col">
									<span class="direction">Email</span>
								</div>
								<div class="grid-col">
									<span class="direction">Ultimo Login</span>
								</div>
								<div class="grid-col center-align">
									<span class="direction">Status</span>
								</div>
								<div class="grid-col center-align" data-disabled="true" data-orderable="false">
									<span>Ação</span>
								</div>
							</div>
						</div>
						<div class="grid grid-body">
							<div class="scroller" style="height: calc(100vh - 290px)">
								@include('clinica.usuarios.list')
							</div>
						</div>
					</div>
					<style>
						.grid {
							display: grid;
						}

						.grid .grid-row {
							display: grid;
							grid-template-columns: 50fr 350fr 200fr 200fr 200fr 150fr 100fr;
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

						.grid .grid-body .grid-row {
							transition: 500ms;
						}

						.grid .grid-body .grid-row:hover {
							background-color: rgba(0, 0, 0, 0.04);
						}

						.grid .grid-body .grid-row.selected {
							background-color: rgba(0, 0, 0, 0.08);
						}

						.grid .grid-body .grid-row .grid-col {
							cursor: pointer;
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
							transform: translateY(0px);
							transition: 200ms;
							opacity: 0.35;
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
							transform: translateY(0px);
							opacity: 1;
						}

						.grid .grid-head .grid-col[data-order="desc"]:not([data-orderable="false"]):after {
							border-top-color: var(--blue-darken-3);
							transform: translateY(0px);
							opacity: 1;
						}
					</style>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
