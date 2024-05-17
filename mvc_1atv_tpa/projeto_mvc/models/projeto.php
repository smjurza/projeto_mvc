<?php
class Projeto{
private $id,
private $nome;
private $duracao;
private $con;
}


public function __construct ($id-null, $nome-null, $duracao-null)
{
$this->id Sid;
$this->nome Gnomez;
$this->duracao Sduzacaci;
$this->con new PDO (SERVIDOR, USUARIO, SENHA);
}

public function all(){
$aql this->con->prepare('SELECT FROM ver projeto'); $sql->execute()/
$rowa $aqi->fetchAll (PDO:: FETCH CLASS);
return $rows
}


public function create(){
VALUES (2,2)); $this->con->prepare('INSERT INTO projeto (nome, duracao)
$sql->execute(($this->nome, $this->duracao)); 

}
public function read()(
$aqi $this->con->prepare('SELECT FROM ver projeto WHERE
id=21);

{
$sql->execute([$this->id]);
$row $sql->fetchObject();
return $row;
}



public function update () {
$sql $this->con->prepare('UPDATE projeto SET nome-?, duracao?
WHERE id-7');
}


$sql->ex execute([$this->nome, $this->duracao, $this->id));
public function dele lete() {
$aqi $this->con->prep >prepare('DELETE FROM projeto WHERE id-7"); $sql->execute(($this->i is->id]);

<thead>
<tr>
<th>Nome</th>
<th>Duração</th>
<th width="280px">Аçoеs</th>
</thead>
<tbody>
<?php foreach($projetos as Sprojeto) (7>
<tr>
<td><?=$projeto->nome?></td>
<td><?=$projeto->duracao_dmY?></td>
<td>
<a class="btn btn-primary"
href="?classe-Projetosacao-readtid-<?-Sprojeto->id?>>Ver</a>
<a class='btn btn-primary"
href-classe-Projetosacao-update&id=<?-Sprojeto->id?>">Alterar</a>
<button type="button" class="btn btn-primary" data-toggle="modal" data- target="#myModal" data-id="<?-Sprojeto->id?>">Excluir</button>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>