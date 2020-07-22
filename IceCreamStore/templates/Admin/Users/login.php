<?= $this->Form->create() ?>
<h1>Login</h1>
<?= $this->Form->control('username'); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->submit() ?>
<?= $this->Form->end() ?>