<?php

require '../NaiveBayes.php';
require 'getModel.php';

$model = getModel();
$naiveBayes = new NaiveBayes($model['classes'], $model['classField'], $model['trainingSet'], $model['params']);

$naiveBayes->setCategoryOfAttribute('outlook', ['cloudy', 'rainy', 'sunny']);
$naiveBayes->setCategoryOfAttribute('temperature', ['cold', 'hot', 'mild']);
$naiveBayes->setCategoryOfAttribute('humidity', ['high', 'normal']);
$naiveBayes->setCategoryOfAttribute('windy', ['false', 'true']);

$classesResult = $naiveBayes->getResultProbabilityOfClassOnCondition(4);
$resultClass = $naiveBayes->getClassificationResult();

?><table border="1"><?php

foreach($classesResult as $class => $value){

	?><tr>
		<td><?=$class?></td>
		<td><?=$value?></td>
	</tr><?php

}

	?><tr>
		<td colspan="2">The Result is <?=$resultClass?></td>
	</tr><?php

?></table>