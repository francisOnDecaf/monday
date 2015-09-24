<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 p-all">
			<div class="p-all main-green text20">
				Finance
				<div class="pull-right">					
					<button type="button" class="btn btn-primary" aria-label="Income" data-toggle="modal" data-target="#add-finance-modal">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-danger" aria-label="Expense" data-toggle="modal" data-target="#deduct-finance-modal">
					  <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
				</div>
				<div class="clearfix"></div>
			</div>

			<div>
				<table id="finance-table">
					<tr class="secondary-green">
						<th width="60%">Item</th>
						<th width="15%">Income</th>
						<th width="15%">Expense</th>
						<th width="10%">Action</th>
					</tr>
					<?php if(count($finances)>0): ?>				
						<?php foreach($finances as $finance): ?>
							<tr>
								<td><?= Html::encode($finance->description); ?></td>
								<td><?= $finance->income ?></td>
								<td><?= $finance->expense ?></td>
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

<div class="modal" id="add-finance-modal" role="dialog">
	<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <?php $form = ActiveForm::begin(); ?>

      <div class="modal-header main-green">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
        	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        	Income
        </h4>
      </div>
      <div class="modal-body">

        	<?= $form->field($model, 'description') ?>

			<?= $form->field($model, 'income') ?>
      </div>
      <div class="modal-footer">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

      <?php ActiveForm::end(); ?>
    </div>

  </div>
</div>

<div class="modal" id="deduct-finance-modal" role="dialog">
	<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <?php $form = ActiveForm::begin(); ?>

      <div class="modal-header main-green">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
        	<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
        	Expense
        </h4>
      </div>
      <div class="modal-body">
      		
        	<?= $form->field($model, 'description') ?>

			<?= $form->field($model, 'expense') ?>
      </div>
      <div class="modal-footer">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

      <?php ActiveForm::end(); ?>
    </div>

  </div>
</div>