<!-- #page-content-wrapper -->
      <div id="page-content-wrapper">

          <div class="row headbar">
              <div class="col-lg-12">
                  <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                      <svg width="1000px" height="1000px">
                          <path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                          <path id="pathB" d="M 300 500 L 700 500"></path>
                          <path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                      </svg>
                      <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                  </div><!-- menu-icon-wrapper -->
              </div>
          </div><!-- /row header-->

          <div class="container">
              <div class="row background">
                  <div class="col-lg-12">
                      <div class="header">
                          <h1>WELCOME TO <span>POLITICS</span>.COM</h1>
                      </div>
                      <div class="main">
                          <div id="Poll">
                               <div class="progress">
                                 <div class="
                                    {{ ($index === activeQuestion) ? 'on' : 'off' }}
                                    {{ (myQuestion.questionState === 'answered') ? 'answered' : 'unanswered' }}
                                    {{ (myQuestion.correctness === 'correct') ? 'correct' : 'incorrect' }}"
                                 ng-repeat="myQuestion in myQuestions"></div>
                             </div><!-- /progress -->
                              <div class="intro {{ (activeQuestion > -1) ? 'inactive' : 'active'}}">
                                  <img src="_/images/debate-gloves.jpg" alt="boxing gloves for debate" height="108" width="302">
                                      <p><em>You ready to <strong>get in the ring</strong>?</em></p>
                                  <br>
                                  <p class="btn btn-primary" ng-click="activeQuestion = 0">Begin</p>
                              </div><!-- /intro -->

                              <div class="question
                                            {{ $index === activeQuestion ? 'active' : 'inactive' }}
                                            {{ myQuestion.questionState === 'answered' ? 'answered' : 'unanswered' }}"
                                            ng-repeat="myQuestion in myQuestions">
                                  <p class="txt">{{myQuestion.question}}</p>
                                  <p class="ans" ng-class="{
                                      selected:isSelected($parent.$index,$index),
                                      correct:isCorrect($parent.$index,$index)}"
                                            ng-click="selectAnswer($parent.$index, $index)"
                                            ng-repeat="Answer in myQuestions[$index].answers">{{Answer.text}}</p>
                                  <div class="feedback">
                                      <p ng-show="myQuestion.correctness === 'correct'">You are <strong>correct</strong></p>
                                      <p ng-show="myQuestion.correctness === 'incorrect'">Oops! that is not correct.</p>
                                      <p>{{myQuestion.feedback}}</p>
                                      <div class="btn" ng-click="selectContinue()">Continue</div>
                                  </div><!-- feedback -->
                              </div>
                              <div class="results {{(totalQuestions === activeQuestion) ? 'active' : 'inactive'}}">
                                  <h3>Results</h3>
                                  <p>You scored {{percentage}}% by correctly answering {{score}} of the total {{totalQuestions}} questions.</p>
                                  <p>Use the links below to challenge your friends.</p>
                                  <div class="share" ng-bind-html="createShareLinks(percentage)">
                                  </div>
                              </div><!-- /results -->

                          </div><!-- /Poll -->
                            <blockquote>
                                <p>“One of the penalties for refusing to participate in politics is that you end up being governed by your inferiors.”</p>
                                — <cite>Plato</cite>
                            </blockquote>
                      </div>    <!-- /main -->
                  </div>        <!-- /col-lg-12 -->
              </div>            <!-- /row background-->
          </div>                <!-- /container -->

      </div>                    <!-- /#page-content-wrapper -->
