<?php $__env->startSection('title', 'Atendimentos'); ?>

<?php $__env->startSection('prev-url', go('clinica.atendimentos.index')); ?>

<?php $__env->startSection('main'); ?>

<div class="container">

	<div class="row scroller" style="height: calc(100vh - 64px);">

		<div class="col s12 l9">

			<div class="card">

				<div class="row">
					<div class="col s12">
						<div class="container pt-2 pb-2 pl-3 pr-3">
							<?php echo e(convert_to_date('d/m/Y H:i:s', 'l, d {de} F {de} Y', false)); ?>

						</div>
					</div>
				</div>

				<div class="divider"> </div>

				<div class="card-content">

					<div class="row">
						<div class="col s12">
							<div class="input-field">
								<label for="queixa_principal">Queixa principal</label>
								<input type="text" name="queixa_principal">
							</div>
						</div>
					</div>

					<div class="row mt-1 mb-1"></div>

					<label style="font-size: inherit;">Anamnese:</label>
					<br>
					<div id="queixa_principal" class="editor materialize-textarea" data-placeholder="Anamnese"><?php echo e($row->notas_clinicas ?? null); ?></div>

					<div class="row mt-1 mb-1"></div>

					<label style="font-size: inherit;">Sintomas:</label>
					<br>
					<div id="queixa_principal" class="editor materialize-textarea" data-placeholder="Sintomas"><?php echo e($row->notas_clinicas ?? null); ?></div>

					<label style="font-size: inherit;">Histórico e antecedentes:</label>
					<br>
					<div id="queixa_principal" class="editor materialize-textarea" data-placeholder="Histórico e antecedentes"><?php echo e($row->notas_clinicas ?? null); ?></div>

					<div class="row mt-1 mb-1"></div>

					<label style="font-size: inherit;">Exame físico:</label>
					<br>
					<div id="queixa_principal" class="editor materialize-textarea" data-placeholder="Diagnóstico"><?php echo e($row->notas_clinicas ?? null); ?></div>

					<div class="row mt-1 mb-1"></div>

					<label style="font-size: inherit;">Diagnóstico:</label>
					<br>
					<div id="queixa_principal" class="editor materialize-textarea" data-placeholder="Diagnóstico"><?php echo e($row->notas_clinicas ?? null); ?></div>

				</div>

			</div>

		</div>

	</div>

	<div class="col s12 l3">

		<aside id="right-sidebar-nav">

			<div id="atendimento" class="slide-out-right-sidenav sidenav rightside-navigation grey lighten-3 z-depth-2 pt-2 pl-1 pr-1 open" style="transform: translateX(-0%);" data-position="right">

				<div class="animated slow fadeIn">

					

					<?php if(isset($row)): ?>

						<?php
							$paciente_model = new \App\Models\PacienteModel();
							$paciente = $paciente_model->getPacienteById($row->id_paciente);
						?>

						<input type="hidden" name="atendimento" value="<?php echo e($row->id); ?>">

						<div class="row">

							<div class="slide-out-right-title flex flex-column">

								<div class="col s12 center-align">

									<div class="foto circle flex flex-column flex-center center-align mb-4">

										<div class="preview z-depth-3">

											<img src="<?php echo e(asset($row->imagem ?? 'img/avatar/icon.png')); ?>" alt="" <?php if(isset($row) && empty($row->imagem) ): ?> style="opacity: 0.4; filter: greyscale(1);" <?php endif; ?>>

										</div>

									</div>

									<div class="row">
										<div class="col s12">
											<h6 class="title" class="mb-0" <?php if(isset($paciente) && strlen($paciente->nome) > 20): ?> data-tooltip="<?php echo e($paciente->nome); ?>" <?php endif; ?>><?php echo e($paciente->nome); ?></h6>
										</div>
									</div>

									<div class="row">
										<div class="col s12">
											<p class="idade m-0">
												<?php echo e(idade($paciente->data_nascimento) ?? 'Não informado'); ?>

											</p>
											<p class="mb-0">
												<span>Convênio: <b><?php echo e($paciente->convenio); ?></b></span>
												<br>
												<span>Atendimento: <b><?php echo e($row->tipo_atendimento); ?></b></span>
											</p>
										</div>
									</div>

								</div>

							</div>

							<div class="slide-out-right-body center-align flex-column flex flex-center" style="padding-top: 30px !important;">

								<div class="row">
									<div class="col s12">

										<?php
										$h = rand(0, 23);
										$m = rand(0, 59);
										$s = rand(0, 59);
										$time = ($h < 10 ? '0' . $h : $h) . ':' . ($m < 10 ? '0' . $m : $m ) . ':' . ($s < 10 ? '0' . $s : $s);
										$time = '00:00:00';
									?>

										<button type="button" class="btn flex green darken-3 mt-10 play" data-trigger="cronometro" data-target="#cronometro" data-time="<?php echo e($time); ?>" data-url="<?php echo e(go('clinica.atendimentos.edit', $row-> id)); ?>">
											<span class="material-icons play left">
												play_arrow
											</span>
											<span>Iniciar atendimento</span>
										</button>
									</div>
								</div>

								<div class="row">
									<div class="col s12 mt-3 mb-3">
										<div id="cronometro" class="btn">
											00 : 00 : 00
										</div>
										<input type="hidden" name="tempo_total" value="<?php echo e($time); ?>">
									</div>
								</div>

							</div>

						</div>

					<?php endif; ?>

				</div>

			</div>

	</div>

</div>

</aside>
<!-- END RIGHT SIDEBAR NAV -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('left-sidebar'); ?>
<?php echo $__env->make('clinica.agendamentos.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('right-sidebar'); ?>
<?php echo $__env->make('clinica.atendimentos.datelhes_atendimento', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('clinica.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alissonp/www/transvida/application/resources/views/clinica/atendimentos/form.blade.php ENDPATH**/ ?>