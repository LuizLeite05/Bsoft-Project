<?php                
session_start();
include_once("c_conexao.php");

// Obtém o ID do setor a partir da sessão.
$id_setor = $_SESSION['id_setor'];

// Consulta o banco de dados para obter informações sobre as solicitações de férias do setor.
$display_query = "SELECT * FROM view_ferias_do_setor WHERE id_setor = $id_setor;";           
$results = mysqli_query($con, $display_query);   
$count = mysqli_num_rows($results);  

if ($count > 0) {
    // Se houver registros encontrados no banco de dados.

    $data_arr = array();
    $i = 1;

    while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {	
        // Obtém os dados relevantes para cada solicitação de férias.

        $data_arr[$i]['event_id'] = $data_row['event_id'];
        $data_arr[$i]['title'] = $data_row['nome_funcionario'];
        $data_arr[$i]['start'] = date("Y-m-d", strtotime($data_row['ferias_inicio']));
        $data_arr[$i]['end'] = date("Y-m-d", strtotime($data_row['ferias_final']));
        
        // Define a cor do evento no calendário (por exemplo, vermelho).
        $data_arr[$i]['color'] = '#FF0000'; // Vermelho

        $i++;
    }
	
    $data = array(
        'status' => true,
        'msg' => 'successfully!',
        'data' => $data_arr
    );
} else {
    // Se nenhum registro for encontrado no banco de dados.

    $data = array(
        'status' => false,
        'msg' => 'Error!'				
    );
}

// Retorna os dados no formato JSON para serem usados no calendário FullCalendar.
echo json_encode($data);
?>
