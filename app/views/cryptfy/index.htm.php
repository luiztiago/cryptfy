		<div id="middle">

			<?php echo $form->create('/cryptfy/index'); ?>

			<?php echo $form->input('string', array(
				'label' => false,
				'placeholder' => 'Type your text here',
				'value' => $string
			)); ?>

			<?php echo $form->input('submit', array(
				'type' => 'submit',
				'label' => false,
				'div' => false,
				'value' => 'Generate'
			)); ?>


			<ul id="results">
			<?php if ($results): ?>
				
				<?php foreach ($results as $crypt => $code): ?>
					<li><strong><?php echo strtoupper($crypt) ?></strong> <?php echo $code; ?></li>
				<?php endforeach; ?>

			<?php endif; ?>
			
			</ul>

			<?php echo $form->close(null); ?>

		</div>