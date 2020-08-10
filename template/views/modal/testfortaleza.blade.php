<div class="modal" tabindex="-1" role="dialog" id="testfortaleza">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Evaluación de fortalezas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                
            </div>
            <div class="modal-body">
                
                <form action="/account/strengths/test/save" method="POST" enctype="multipart/form-data">
                    <div id="welcome_test">
                        <b>Antes de comenzar es importante que leas lo siguiente :</b>
                        <ul style="line-height: 1.5;">
                            <li>El test se compone de 20 preguntas y toma aproximadamente 8 minutos contestarlo .</li>
                            <li>En cada pregunta debes escoger cuánto te describe cada una de las aseveraciones mostradas y escoger la
                                alternativa que mejor refleje esa elección .</li>
                            <li>Tras realizar el test obtendrás información valiosa sobre tu perfil y sobre tus fortalezas .</li>
                            <li><span style="color: darkred"><b>Recuerda que NO existen respuestas malas ni buenas, sólo responde cada
                                        pregunta de la forma más seria posible .</b></span></li>
                        </ul>
                        <br>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary" onclick="$('#welcome_test').hide(); $('#q_1').slideToggle(200);">Comenzar
                                Test</a>
                        </div>
                    </div>

                    <div class="mb_question" id="q_1">
                        <div class="test_progress">
                            <div class="bar" style="width:0%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Tomar decisiones sin tener que consultar a los demás.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+1).show()" type="radio" name="p1"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+1).show()" type="radio" name="p1"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+1).show()" type="radio" name="p1"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+1).show()" type="radio" name="p1"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+1).show()" type="radio" name="p1"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+1).show()" type="radio" name="p1"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Tomar decisiones después de saber lo que piensan los demás.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p1">
                            <a href="#" onclick="ShowQuestionTest(2)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_2">
                        <div class="test_progress">
                            <div class="bar" style="width:5%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Que me consideren objetivo y preciso.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+2).show()" type="radio" name="p2"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+2).show()" type="radio" name="p2"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+2).show()" type="radio" name="p2"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+2).show()" type="radio" name="p2"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+2).show()" type="radio" name="p2"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+2).show()" type="radio" name="p2"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Que me consideren imaginativo o intuitivo.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p2">
                            <a href="#" onclick="ShowQuestionTest(3)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_3">
                        <div class="test_progress">
                            <div class="bar" style="width:10%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Tomar decisiones sobre personas en organizaciones basadas en los datos disponibles y un análisis
                                    sistematizado de la situación.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+3).show()" type="radio" name="p3"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+3).show()" type="radio" name="p3"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+3).show()" type="radio" name="p3"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+3).show()" type="radio" name="p3"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+3).show()" type="radio" name="p3"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+3).show()" type="radio" name="p3"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Tomar decisiones sobre personas en organizaciones basadas en la simpatía, los sentimientos, y un
                                    entendimiento de sus necesidades y valores.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p3">
                            <a href="#" onclick="ShowQuestionTest(4)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_4">
                        <div class="test_progress">
                            <div class="bar" style="width:15%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Abogar por compromisos, sujeto a la disposición de los demás.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+4).show()" type="radio" name="p4"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+4).show()" type="radio" name="p4"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+4).show()" type="radio" name="p4"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+4).show()" type="radio" name="p4"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+4).show()" type="radio" name="p4"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+4).show()" type="radio" name="p4"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Abogar por compromisos definitivos, asegurando que se realicen.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p4">
                            <a href="#" onclick="ShowQuestionTest(5)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_5">
                        <div class="test_progress">
                            <div class="bar" style="width:20%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Tiempo pacífico y contemplativo.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+5).show()" type="radio" name="p5"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+5).show()" type="radio" name="p5"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+5).show()" type="radio" name="p5"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+5).show()" type="radio" name="p5"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+5).show()" type="radio" name="p5"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+5).show()" type="radio" name="p5"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Tiempo activo y dinámico con otros.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p5">
                            <a href="#" onclick="ShowQuestionTest(6)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_6">
                        <div class="test_progress">
                            <div class="bar" style="width:25%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Probar nuevos métodos para cumplir las tareas a medida que surgen.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+6).show()" type="radio" name="p6"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+6).show()" type="radio" name="p6"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+6).show()" type="radio" name="p6"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+6).show()" type="radio" name="p6"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+6).show()" type="radio" name="p6"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+6).show()" type="radio" name="p6"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Utilizar métodos que conozco bien y que son eficaces para cumplir con la tarea.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p6">
                            <a href="#" onclick="ShowQuestionTest(7)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_7">
                        <div class="test_progress">
                            <div class="bar" style="width:30%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Formular conclusiones basadas en la lógica y un análisis paso a paso y cuidadoso.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+7).show()" type="radio" name="p7"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+7).show()" type="radio" name="p7"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+7).show()" type="radio" name="p7"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+7).show()" type="radio" name="p7"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+7).show()" type="radio" name="p7"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+7).show()" type="radio" name="p7"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Formular conclusiones basadas en lo que siento y creo de la vida y de las personas.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p7">
                            <a href="#" onclick="ShowQuestionTest(8)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_8">
                        <div class="test_progress">
                            <div class="bar" style="width:35%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Prescindir de límites de tiempo.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+8).show()" type="radio" name="p8"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+8).show()" type="radio" name="p8"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+8).show()" type="radio" name="p8"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+8).show()" type="radio" name="p8"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+8).show()" type="radio" name="p8"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+8).show()" type="radio" name="p8"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Crear un horario y cumplirlo bien.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p8">
                            <a href="#" onclick="ShowQuestionTest(9)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_9">
                        <div class="test_progress">
                            <div class="bar" style="width:40%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>La privacidad, los pensamientos y sentimientos personales.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+9).show()" type="radio" name="p9"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+9).show()" type="radio" name="p9"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+9).show()" type="radio" name="p9"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+9).show()" type="radio" name="p9"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+9).show()" type="radio" name="p9"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+9).show()" type="radio" name="p9"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Lo extrovertido, las actividades y situaciones sociales.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p9">
                            <a href="#" onclick="ShowQuestionTest(10)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_10">
                        <div class="test_progress">
                            <div class="bar" style="width:45%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Lo abstracto y lo teórico.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+10).show()" type="radio" name="p10"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+10).show()" type="radio" name="p10"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+10).show()" type="radio" name="p10"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+10).show()" type="radio" name="p10"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+10).show()" type="radio" name="p10"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+10).show()" type="radio" name="p10"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Lo concreto y lo real.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p10">
                            <a href="#" onclick="ShowQuestionTest(11)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_11">
                        <div class="test_progress">
                            <div class="bar" style="width:50%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Ayudar a los demás a tomar decisiones lógicas.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+11).show()" type="radio" name="p11"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+11).show()" type="radio" name="p11"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+11).show()" type="radio" name="p11"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+11).show()" type="radio" name="p11"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+11).show()" type="radio" name="p11"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+11).show()" type="radio" name="p11"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Ayudar a los demás a explorar sus emociones.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p11">
                            <a href="#" onclick="ShowQuestionTest(12)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_12">
                        <div class="test_progress">
                            <div class="bar" style="width:55%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Comunicar poco sobre mis pensamientos y sentimientos.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+12).show()" type="radio" name="p12"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+12).show()" type="radio" name="p12"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+12).show()" type="radio" name="p12"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+12).show()" type="radio" name="p12"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+12).show()" type="radio" name="p12"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+12).show()" type="radio" name="p12"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Comunicar libremente mis pensamientos y sentimientos.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p12">
                            <a href="#" onclick="ShowQuestionTest(13)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_13">
                        <div class="test_progress">
                            <div class="bar" style="width:60%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Planear a medida que las necesidades surgen.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+13).show()" type="radio" name="p13"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+13).show()" type="radio" name="p13"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+13).show()" type="radio" name="p13"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+13).show()" type="radio" name="p13"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+13).show()" type="radio" name="p13"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+13).show()" type="radio" name="p13"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Planear el futuro basado en proyecciones.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p13">
                            <a href="#" onclick="ShowQuestionTest(14)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_14">
                        <div class="test_progress">
                            <div class="bar" style="width:65%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Estar solo y/o con una persona que conozca bien.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+14).show()" type="radio" name="p14"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+14).show()" type="radio" name="p14"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+14).show()" type="radio" name="p14"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+14).show()" type="radio" name="p14"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+14).show()" type="radio" name="p14"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+14).show()" type="radio" name="p14"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Conocer gente nueva.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p14">
                            <a href="#" onclick="ShowQuestionTest(15)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_15">
                        <div class="test_progress">
                            <div class="bar" style="width:70%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Las ideas.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+15).show()" type="radio" name="p15"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+15).show()" type="radio" name="p15"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+15).show()" type="radio" name="p15"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+15).show()" type="radio" name="p15"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+15).show()" type="radio" name="p15"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+15).show()" type="radio" name="p15"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Los hechos.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p15">
                            <a href="#" onclick="ShowQuestionTest(16)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_16">
                        <div class="test_progress">
                            <div class="bar" style="width:75%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Las conclusiones verificables.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+16).show()" type="radio" name="p16"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+16).show()" type="radio" name="p16"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+16).show()" type="radio" name="p16"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+16).show()" type="radio" name="p16"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+16).show()" type="radio" name="p16"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+16).show()" type="radio" name="p16"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Las convicciones.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p16">
                            <a href="#" onclick="ShowQuestionTest(17)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_17">
                        <div class="test_progress">
                            <div class="bar" style="width:80%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Utilizar agendas o libretas lo menos posible.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+17).show()" type="radio" name="p17"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+17).show()" type="radio" name="p17"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+17).show()" type="radio" name="p17"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+17).show()" type="radio" name="p17"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+17).show()" type="radio" name="p17"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+17).show()" type="radio" name="p17"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Guardar las citas y apuntes sobre los compromisos en libretas o en agendas.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p17">
                            <a href="#" onclick="ShowQuestionTest(18)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_18">
                        <div class="test_progress">
                            <div class="bar" style="width:85%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Diseñar planes y estructuras sin llevarlos a cabo necesariamente.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+18).show()" type="radio" name="p18"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+18).show()" type="radio" name="p18"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+18).show()" type="radio" name="p18"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+18).show()" type="radio" name="p18"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+18).show()" type="radio" name="p18"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+18).show()" type="radio" name="p18"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Llevar a cabo con precisión los planes cuidadosamente proyectados y detallados.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p18">
                            <a href="#" onclick="ShowQuestionTest(19)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_19">
                        <div class="test_progress">
                            <div class="bar" style="width:90%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Gestionar en la medida de que se produzcan los hechos.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+19).show()" type="radio" name="p19"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+19).show()" type="radio" name="p19"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+19).show()" type="radio" name="p19"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+19).show()" type="radio" name="p19"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+19).show()" type="radio" name="p19"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+19).show()" type="radio" name="p19"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Saber con anticipación lo que se espera que yo haga.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p19">
                            <a href="#" onclick="ShowQuestionTest(20)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_20">
                        <div class="test_progress">
                            <div class="bar" style="width:95%;"></div>
                        </div>
                        <br />

                        <div class="question row">
                            <div class="col-sm-3 text-left rp0 col-xs-6">
                                <b>Usar mi capacidad de analizar situaciones.</b>
                                <div class="title text-left visible-xs-block">
                                    <div class="tb10"></div>
                                    Me identifico fuertemente
                                    <div class="tb10"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="title hidden-xs row">
                                    <div class="col-sm-4 text-left lp0 rp0">Me identifico fuertemente</div>
                                    <div class="col-sm-4 lp0 rp0">Neutral</div>
                                    <div class="col-sm-4 text-right lp0 rp0">Me identifico fuertemente</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="options tb10 row">
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+20).show()" type="radio" name="p20"
                                            value="5-0" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+20).show()" type="radio" name="p20"
                                            value="4-1" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+20).show()" type="radio" name="p20"
                                            value="3-2" /></div>
                                    <div class="option light col-xs-2"><input onclick="$('#btn_p'+20).show()" type="radio" name="p20"
                                            value="2-3" /></div>
                                    <div class="option normal col-xs-2"><input onclick="$('#btn_p'+20).show()" type="radio" name="p20"
                                            value="1-4" /></div>
                                    <div class="option dark col-xs-2"><input onclick="$('#btn_p'+20).show()" type="radio" name="p20"
                                            value="0-5" /></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-3 tb20-xs text-right lp0 col-xs-6 col-xs-offset-6 col-sm-offset-0">
                                
                                <b>Usar la intuición para resolver situaciones.</b>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tb20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 tb20 text-center next_btn" id="btn_p20">
                            <a href="#" onclick="ShowQuestionTest(21)" class="btn btn-primary">Siguiente</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mb_question" id="q_21">
                        <div class="alert alert-success" class="text-center">
                            <b>Haz respondido todas las preguntas del cuestionario .</b>
                            <br />
                            <br />
                            Haz click en &quot;Guardar Test&quot; para finalizar.
                            <br />
                            <br />
                            <input type="submit" class="btn btn-primary" value="Guardar Test " />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>