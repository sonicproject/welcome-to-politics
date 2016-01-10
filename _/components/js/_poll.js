
(function(){

	var app = angular.module('Poll',[]);
	app.controller('PollController', ['$scope', '$http', '$sce',function($scope, $http, $sce){

		$scope.score = 0;
		$scope.activeQuestion = -1;
		$scope.activeQuestionAnswered = 0;
		$scope.percentage = 0;

		$http.get('poll_data.json').then(function(pollData){
				$scope.myQuestions = pollData.data;
				$scope.totalQuestions = $scope.myQuestions.length;
		}); // closes $http.get

		$scope.selectAnswer = function(qIndex, aIndex){

			var questionState = $scope.myQuestions[qIndex].questionState;

			if (questionState != 'answered') {
				$scope.myQuestions[qIndex].selectedAnswer = aIndex;
				var correctAnswer = $scope.myQuestions[qIndex].correct;
				$scope.myQuestions[qIndex].correctAnswer = correctAnswer;

				if ( aIndex === correctAnswer ) {
					$scope.myQuestions[qIndex].correctness = 'correct';
					$scope.score += 1;
				}else {
					$scope.myQuestions[qIndex].correctness = 'incorrect';
				}
				$scope.myQuestions[qIndex].questionState = 'answered';
			}
			$scope.percentage = (($scope.score / $scope.totalQuestions)*100).toFixed(1);
		}

		$scope.isSelected = function(qIndex,aIndex) {
			return $scope.myQuestions[qIndex].selectedAnswer === aIndex;
		}
		$scope.isCorrect = function(qIndex,aIndex) {
			return $scope.myQuestions[qIndex].correctAnswer === aIndex;
		}
		$scope.selectContinue = function(){
			return $scope.activeQuestion += 1;
		}

		$scope.createShareLinks = function(percentage){
			var url = 'http://www.welcometopolitics.com';
			var emailLink = '<a class="btn email" href="mailto:?subject=Try to beat my poll score!&amp;body=I%20scored a '+percentage+'% on this poll about politics. Try to beat my score at '+url+'">Email a friend</a>';
			var twitterLink = '<a class="btn twitter" target="_blank" href="http:///twitter.com/share?text=I scored a '+percentage+'% on this poll about politics. Try to beat my score at&hashtags=WelcometoPolitics&url='+url+'">Tweet your score</a>';
			var newMarkup = emailLink + twitterLink;
			return $sce.trustAsHtml(newMarkup);
		}

	}]); 	// closes pollController

})();		// closes function
