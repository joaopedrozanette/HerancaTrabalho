<?php
require_once("modelo/Ataque.php");
require_once("modelo/Defesa.php");
require_once("modelo/MeioCampo.php");

$pirlo = new MeioCampo();
$pirlo->setNome("Andrea Pirlo");
$pirlo->setPosicao("Volante");
$pirlo->setPontuacaoGeral(95);
$pirlo->setTime("Ac Milan 2001 - 2011");
$pirlo->setNacionalidade("Italiano");
$pirlo->setHabilidadeEscanteio(97);
$pirlo->setHabilidadeFalta(100);


$eto = new Ataque();
$eto->setNome("Samuel Eto");
$eto->setPosicao("Centro-Avante");
$eto->setPontuacaoGeral(98);
$eto->setTime("Fc Barcelona 2004 - 2009");
$eto->setNacionalidade("Camaronês");
$eto->setHabilidadePenalti(99);
$eto->setHabilidadeFalta(72);

$ceni = new Defesa();
$ceni->setNome("Rogério Ceni");
$ceni->setPosicao("Goleiro");
$ceni->setPontuacaoGeral(94);
$ceni->setTime("São Paulo 1993 - 2015");
$ceni->setNacionalidade("Brasileiro");
$ceni->setHabilidadePenalti(99);
$ceni->setDefenderPenalti(99);

$jogadores = array($ceni, $eto, $pirlo);

$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "1- Cadastrar Jogador\n";
    echo "2- Listar Jogadores\n";
    echo "3- Excluir Jogadores\n";
    echo "4- Penalti\n";
    echo "5- Falta\n";
    echo "6- Escanteio\n";
    echo "7- Defender Penalti\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            echo "\nCadastro de novo jogador.\n";
            $jogador = null;

            $opcao2 = 0;
            do {
                echo "\nSelecione a Área de Atuação do Jogador\n";
                echo "1- Ataque\n";
                echo "2- Meio-Campo\n";
                echo "3- Defesa\n";
                echo "0- SAIR\n";
                $opcao2 = readline("Escolha a opção: ");
                switch ($opcao2) {
                    case 1:
                        $jogador = new Ataque();
                        break;
                    case 2:
                        $jogador = new MeioCampo();
                        break;
                    case 3:
                        $jogador = new Defesa();
                        break;
                    case 0:
                        echo "Cancelando cadastro de jogador e voltando ao menu principal.\n";
                        break;
                    default:
                        echo "Opção INVÁLIDA!\n";
                }
            } while ($opcao2 != 0 and !($jogador instanceof Jogador));

            if ($jogador instanceof Jogador) {
                $jogador->setNome(readline("Nome Jogador: "));
                $jogador->setPosicao(readline("Posição do Jogador: "));
                $jogador->setPontuacaoGeral(readline("Pontuação geral do Jogador: "));
                $jogador->setTime(readline("Time do Jogador: "));
                $jogador->setNacionalidade(readline("Nacionalidade do Jogador: "));

                if ($jogador instanceof Ataque) {
                    $jogador->setHabilidadePenalti(readline("Habilidade em cobrança de pênalti: "));
                    $jogador->setHabilidadeFalta(readline("Habilidade em cobrança de falta: "));
                } elseif ($jogador instanceof MeioCampo) {
                    $jogador->setHabilidadeFalta(readline("Habilidade em cobrança de falta: "));
                    $jogador->setHabilidadeEscanteio(readline("Habilidade em cobrança de escanteio: "));
                } elseif ($jogador instanceof Defesa) {
                    $jogador->setHabilidadePenalti(readline("Habilidade em cobrança de pênalti: "));
                    $jogador->setDefenderPenalti(readline("Habilidade em defender pênalti: "));
                }

                array_push($jogadores, $jogador);
                echo "\nJogador cadastrado\n";
            }
            break;
        case 2:
            echo "Listando jogadores...\n";
            foreach ($jogadores as $j) {
                echo "\nJogador:\n";
                echo "Nome: " . $j->getNome() . "\n";
                echo "Posição: " . $j->getPosicao() . "\n";
                echo "Pontuação Geral: " . $j->getPontuacaoGeral() . "\n";
                echo "Time: " . $j->getTime() . "\n";
                echo "Nacionalidade: " . $j->getNacionalidade() . "\n";

                if ($j instanceof Ataque) {
                    echo "Habilidade em Pênalti: " . $j->getHabilidadePenalti() . "\n";
                    echo "Habilidade em Falta: " . $j->getHabilidadeFalta() . "\n";
                } elseif ($j instanceof MeioCampo) {
                    echo "Habilidade em Falta: " . $j->getHabilidadeFalta() . "\n";
                    echo "Habilidade em Escanteio: " . $j->getHabilidadeEscanteio() . "\n";
                } elseif ($j instanceof Defesa) {
                    echo "Habilidade em Pênalti: " . $j->getHabilidadePenalti() . "\n";
                    echo "Habilidade em Defender Pênalti: " . $j->getDefenderPenalti() . "\n";
                }
            }
            break;
        case 3:
            echo "Excluindo jogador...\n";

            if (count($jogadores) > 0) {

                foreach ($jogadores as $indice => $j) {
                    echo ($indice + 1) . "- " . $j->getNome() . " (" . $j->getPosicao() . ")\n";
                }


                $opcaoExcluir = readline("Escolha o número do jogador para excluir ( digite 0 para cancelar): ");


                if ($opcaoExcluir != 0 and $opcaoExcluir > 0 and $opcaoExcluir <= count($jogadores)) {

                    $indiceExcluir = $opcaoExcluir - 1;

                    array_splice($jogadores, $indiceExcluir, 1);
                    echo "Jogador excluído.\n";
                } elseif ($opcaoExcluir == 0) {
                    echo " Não Excluiu \n";
                } else {
                    echo "Opção inválida!\n";
                }
            } else {
                echo "Nenhum jogador disponível para ser excluído.\n";
            }
            break;
        case 4:
            echo "Escolha um jogador para cobrar o pênalti:\n";


            if (count($jogadores) > 0) {
                $jogadoresPenalti = array();


                foreach ($jogadores as $indice => $j) {
                    if ($j instanceof Ataque or $j instanceof Defesa) {
                        $jogadoresPenalti[] = $j;
                        echo ($indice + 1) . "- " . $j->getNome() . " (" . $j->getPosicao() . ")\n";
                    }
                }


                if (count($jogadoresPenalti) > 0) {
                    $opcaoPenalti = readline("Escolha o número do jogador para cobrar o pênalti (digite 0 para cancelar): ");


                    if ($opcaoPenalti != 0 and $opcaoPenalti > 0 and $opcaoPenalti <= count($jogadores)) {
                        $jogadorEscolhido = $jogadores[$opcaoPenalti - 1];


                        if ($jogadorEscolhido instanceof Ataque or $jogadorEscolhido instanceof Defesa) {
                            echo $jogadorEscolhido->getNome() . " Irá cobrar o pênalti...\n";

                            $jogadorEscolhido->cobrarPenalti();
                        } else {
                            echo "Este jogador não pode cobrar pênaltis.\n";
                        }
                    } elseif ($opcaoPenalti == 0) {
                        echo "Operação cancelada.\n";
                    } else {
                        echo "Opção inválida!\n";
                    }
                } else {
                    echo "Nenhum jogador disponível para cobrar pênaltis.\n";
                }
            } else {
                echo "Nenhum jogador disponível.\n";
            }
            break;
        case 5:
            echo "Escolha um jogador para cobrar a falta:\n";

            if (count($jogadores) > 0) {
                $jogadoresFalta = array();

                foreach ($jogadores as $indice => $j) {
                    if ($j instanceof Ataque || $j instanceof MeioCampo) {
                        $jogadoresFalta[] = $j;
                        echo ($indice + 1) . "- " . $j->getNome() . " (" . $j->getPosicao() . ")\n";
                    }
                }

                if (count($jogadoresFalta) > 0) {
                    $opcaoFalta = readline("Escolha o número do jogador para cobrar a falta (digite 0 para cancelar): ");

                    if ($opcaoFalta != 0 and $opcaoFalta > 0 and $opcaoFalta <= count($jogadores)) {
                        $jogadorEscolhido = $jogadores[$opcaoFalta - 1];

                        if ($jogadorEscolhido instanceof Ataque || $jogadorEscolhido instanceof MeioCampo) {
                            echo $jogadorEscolhido->getNome() . " irá cobrar a falta...\n";
                            $jogadorEscolhido->cobrarFalta();
                        } else {
                            echo "Este jogador não pode cobrar faltas.\n";
                        }
                    } elseif ($opcaoFalta == 0) {
                        echo "Operação cancelada.\n";
                    } else {
                        echo "Opção inválida!\n";
                    }
                } else {
                    echo "Nenhum jogador disponível para cobrar faltas.\n";
                }
            } else {
                echo "Nenhum jogador disponível.\n";
            }
            break;

        case 6:
            echo "Escolha um jogador para cobrar o escanteio:\n";

            if (count($jogadores) > 0) {
                $jogadoresEscanteio = array();

                foreach ($jogadores as $indice => $j) {
                    if ($j instanceof MeioCampo) {
                        $jogadoresEscanteio[] = $j;
                        echo ($indice + 1) . "- " . $j->getNome() . " (" . $j->getPosicao() . ")\n";
                    }
                }

                if (count($jogadoresEscanteio) > 0) {
                    $opcaoEscanteio = readline("Escolha o número do jogador para cobrar o escanteio (digite 0 para cancelar): ");

                    if ($opcaoEscanteio != 0 and $opcaoEscanteio > 0 and $opcaoEscanteio <= count($jogadores)) {
                        $jogadorEscolhido = $jogadores[$opcaoEscanteio - 1];

                        if ($jogadorEscolhido instanceof MeioCampo) {
                            echo $jogadorEscolhido->getNome() . " irá cobrar o escanteio...\n";
                            $jogadorEscolhido->cobrarEscanteio();
                        } else {
                            echo "Este jogador não pode cobrar escanteios.\n";
                        }
                    } elseif ($opcaoEscanteio == 0) {
                        echo "Operação cancelada.\n";
                    } else {
                        echo "Opção inválida!\n";
                    }
                } else {
                    echo "Nenhum jogador disponível para cobrar escanteios.\n";
                }
            } else {
                echo "Nenhum jogador disponível.\n";
            }
            break;

        case 7:
            echo "Escolha um jogador para defender o pênalti:\n";


            if (count($jogadores) > 0) {
                $jogadoresDefenderPenalti = array();


                foreach ($jogadores as $indice => $j) {
                    if ($j instanceof Defesa) {
                        $jogadoresDefenderPenalti[] = $j;
                        echo ($indice + 1) . "- " . $j->getNome() . " (" . $j->getPosicao() . ")\n";
                    }
                }


                if (count($jogadoresDefenderPenalti) > 0) {
                    $opcaoDefesa = readline("Escolha o número do jogador para defender o pênalti (digite 0 para cancelar): ");


                    if ($opcaoDefesa != 0 and $opcaoDefesa > 0 and $opcaoDefesa <= count($jogadores)) {
                        $jogadorEscolhido = $jogadores[$opcaoDefesa - 1];


                        if ($jogadorEscolhido instanceof Defesa) {
                            echo $jogadorEscolhido->getNome() . " irá defender o pênalti...\n";


                            $jogadorEscolhido->defenderPenalti();
                        } else {
                            echo "Este jogador não pode defender pênaltis.\n";
                        }
                    } elseif ($opcaoDefesa == 0) {
                        echo "Operação cancelada.\n";
                    } else {
                        echo "Opção inválida!\n";
                    }
                } else {
                    echo "Nenhum jogador disponível para defender pênaltis.\n";
                }
            } else {
                echo "Nenhum jogador disponível.\n";
            }
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
