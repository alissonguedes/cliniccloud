ALTER TABLE dev_db_medicus24h.tb_paciente DROP FOREIGN KEY fk_tb_paciente_id_acomodacao;
ALTER TABLE dev_db_medicus24h.tb_paciente DROP FOREIGN KEY fk_tb_paciente_id_convenio;

ALTER TABLE `tb_paciente` DROP `id_acomodacao`;
ALTER TABLE `tb_paciente` DROP `id_convenio`;

ALTER TABLE `tb_paciente` ADD `associado` ENUM('yes','no') NOT NULL DEFAULT 'no' AFTER `codigo`;

