<?
class Model_Mail extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.hotelmarquesdelangel.com',
			'smtp_port' => 587,
			'smtp_user' => 'no_replayweb@hotelmarquesdelangel.com',
			'smtp_pass' => 'lXU+Ju{Q%Bd_',
			'mailtype'  => 'html', 
			'charset' => 'utf-8',
			'wordwrap' => TRUE,
			'smtp_crypto'=>'tls',
			'wrapchars'=>76,
			'charset'=>'utf-8',
			'validate'=>TRUE,
			'crlf'=>"\r\n",
			'newline'=>"\r\n",
			'bcc_batch_mode'=>FALSE,
			'bcc_batch_size'=>200,

		);
		$this->email->initialize($this->config);
		$this->email->from('no_replayweb@hotelmarquesdelangel.com', 'Pagina Web Hotel Marques');
		$this->email->to("lira053@gmail.com,eventos@hotelmarquesdelangel.com");
	}
	//funcion para envair cotizacion 
	public function enviar_cotizacion($nombre,$correo,$telefono,$evento,$fecha,$personas,$comentarios){
		$this->email->subject("Envio de cotizacion de Pagina Web");
		$body='<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<table class="table">
		<thead >
			<tr class="bg-dark text-white ">
				<th colspan=2 scope="col " class="text-center">Cotización Solicitada</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					Nombre:
				</td>
				<td>
					'.$nombre.'
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td>
					'.$correo.'
				</td>
			</tr>
			<tr>
				<td>
					Teléfono/Celular:
				</td>
				<td>
					'.$telefono.'
				</td>
			</tr>
			<tr>
				<td>
					Tipo Evento/Ocasión:
				</td>
				<td>
					'.$evento.'
				</td>
			</tr>
			<tr>
				<td>
					Fecha:
				</td>
				<td>
					'.$fecha.'
				</td>
			</tr>
			<tr>
				<td>
					No. Personas:
				</td>
				<td>
					'.$personas.'
				</td>
			</tr>
			<tr>
				<td>
					Comentarios:
				</td>
				<td>
					'.$comentarios.'
				</td>
			</tr>
		</tbody>

	</table>
</body>
</html>';
		$this->email->message($body);
		$this->email->send();
	}
}