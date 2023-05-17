<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de Arrays</title>
</head>
<body>
    <h1>Atividade Arrays</h1>

    <?php

$Array = [
    'cursos' => [
        [
            'nome' => 'informatica',
            'alunos' => [
                [
                    'nome' => 'thayna',
                    'disciplinas' => [
                        [
                            'nome' => 'matematica',
                            'notas' => [3, 2, 5],
                        ],
                        [
                            'nome' => 'portugues',
                            'notas' => [6, 7, 8],
                        ],
                        [
                            'nome' => 'biologia',
                            'notas' => [8, 8, 10],
                        ],
                        [
                            'nome' => 'historia',
                            'notas' => [5, 6, 7],
                        ],
                    ],
                ],
                [
                    'nome' => 'dyjayny',
                    'disciplinas' => [
                        [
                            'nome' => 'ciencia',
                            'notas' => [6, 6, 5],
                        ],
                        [
                            'nome' => 'psw',
                            'notas' => [7, 8, 7],
                        ],
                        [
                            'nome' => 'asw',
                            'notas' => [6, 6, 7],
                        ],
                        [
                            'nome' => 'bd',
                            'notas' => [6, 7, 8],
                        ],
                    ],
                ],
            ],
        ],
        [
            'nome' => 'Agropecuaria',
            'alunos' => [
                [
                    'nome' => 'jeanderson',
                    'disciplinas' => [
                        [
                            'nome' => 'geografia',
                            'notas' => [8, 5, 7],
                        ],
                        [
                            'nome' => 'fisica',
                            'notas' => [7, 6, 7],
                        ],
                        [
                            'nome' => 'quimica',
                            'notas' => [9, 8, 10],
                        ],
                        [
                            'nome' => 'mecanizacao',
                            'notas' => [6, 7, 8],
                        ],
                    ],
                ],
                
]
        ]
          

foreach ($Array['cursos'] as $curso) {
    echo "Nome do curso: " . $curso['nome'] . "<br>";
}

echo "<br>";

foreach ($Array['cursos'] as $curso) {
    foreach ($curso['alunos'] as $aluno) {
        echo "Nome do aluno: " . $aluno ['nome']. "<br>";
    }
}

echo "<br>";


foreach ($Array['cursos'] as $curso) {
    foreach ($curso['alunos'] as $aluno) {
        foreach ($aluno['disciplinas'] as $disciplina) {
            echo "Nome da disciplina: " . $disciplina['nome'] . "<br>";
        }
    }
}

echo "<br>";

foreach ($Array['cursos'] as $curso) {
    foreach ($curso['alunos'] as $aluno) {
        echo "Nome do aluno: " . $aluno['nome'] . "<br>";
        echo "Disciplinas e notas:<br>";
        foreach ($aluno['disciplinas'] as $disciplina) {
            echo "Disciplina: " . $disciplina['nome'] . "<br>";
            echo "Notas: " . implode(', ', $disciplina['notas']) . "<br>";
        }
        echo "<br>";
    }
}

echo "<br>";

?>
    
</body>
</html>