<?php
try{
	$user = "phpuser";		//books�ɃA�N�Z�X���郆�[�U��
	$password = ""; 	//phpuser�ɑΉ�����p�X���[�h

	// �f�[�^�x�[�X�ɐڑ�����ۂ̃I�v�V������ݒ肵�ĕϐ��ɒu��������
	$opt = [
		//��SQL�G���[���̑Ώ��@��Exception�𔭐������A�ʒm����
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		//SQL�����������s����Ȃ������ۂ̃G���[�̔����̂�����
		PDO::ATTR_EMULATE_PREPARES => false,
		//���s�̂�������ON/OFF�؂�ւ�
		PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
	];

	// PDO�I�u�W�F�N�g�𗘗p���ăf�[�^�x�[�X�ɐڑ�����
	$dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);

	// �ڑ��ł������ǂ����̊m�F
	var_dump($dbh);
}catch(PDOException $e){
	echo " �G���[!: " . $e->getMessage() . "<br>";
}