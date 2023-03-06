
		public function form_plano(Request $request, $id = null)
		{

			if (!is_null($id)) {

				echo '--> ' . $id;

				$id       = is_null($id) ? $this->paciente_model->getConvenioNextIdValue() : $id;
				$convenio = json_decode($request->plano, true);

				$convenio = [
					'id'            => $id,
					'id_convenio'   => $convenio['id_convenio'],
					'id_tipo'       => $convenio['id_tipo'],
					'id_acomodacao' => $convenio['id_acomodacao'],
					'matricula'     => $convenio['matricula'],
					'validade_ano'  => $convenio['validade_ano'],
					'validade_mes'  => $convenio['validade_mes'],
				];
				$dados['row'] = $this->paciente_model->getConvenios($id) ?? (object) $convenio;
			}

			$dados['acomodacoes']  = $this->paciente_model->getAcomodacao();
			$dados['etnias']       = $this->paciente_model->getEtnia();
			$dados['convenios']    = $this->convenio_model->getConvenio();
			$dados['estado_civil'] = $this->estadoCivil_model->getEstadoCivil();

			return view('clinica.pacientes.modal_form_planos', $dados);

		}

		public function add_plano(Request $request, $plano = null)
		{

			// $request->validate([
			// 	'convenio'            => 'required',
			// 	'tipo_convenio'       => 'required',
			// 	'acomodacao_convenio' => 'required',
			// 	'matricula_convenio'  => 'required',
			// 	'validade_ano'        => 'required',
			// 	'validade_mes'        => 'required',
			// ]);

			// // $dados['convenios'] = $this->convenio_model->getConvenio();
			// $status = 'success';

			// $data['id']           = $request->id ?? ($plano ?? $this->paciente_model->getConvenioNextIdValue());
			// $data['convenio']     = $this->convenio_model->getConvenio($request->convenio)->first();
			// $data['tipo']         = $this->convenio_model->getTipoConvenio($request->tipo_convenio)->first();
			// $data['acomodacao']   = $this->convenio_model->getAcomodacao($request->acomodacao_convenio)->first();
			// $data['matricula']    = $request->matricula_convenio;
			// $data['validade_ano'] = $request->validade_ano;
			// $data['validade_mes'] = $request->validade_mes;

			// $view = view('clinica.pacientes.convenios', $data);

			// return response()->json([
			// 	'status'      => $status,
			// 	'data'        => $view->render(),
			// 	'index'       => $data['id'],
			// 	'clean_form'  => true,
			// 	'close_modal' => true,
			// ]);

		}
