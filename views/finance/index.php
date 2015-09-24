<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 p-all">
			<div class="p-all main-green text20">
				Finance
				<div class="pull-right">					
					<button type="button" class="btn btn-primary" aria-label="Income an Equity">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-danger" aria-label="Expense">
					  <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
				</div>
				<div class="clearfix"></div>
			</div>

			<div>
				<table id="finance-table">
					<tr class="secondary-green">
						<th width="60%">Item</th>
						<th width="30%">Cost</th>
						<th width="10%">Action</th>
					</tr>
					<?php if(count($finances)>0): ?>				
						<?php foreach($finances as $finance): ?>
							<tr>
								<td><?= Html::encode($finance->description); ?></td>
								<td><?= $finance->cost ?></td>
								<td> 
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<td colspan="3" class="text-center">No Equities found. Please add a data.</td>
						</tr>
					<?php endif; ?>
				</table>				
			</div>
		</div>
	</div>
</div>