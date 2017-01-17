

<!-- indexer::stop -->
<div class="<?= $this->class ?> <?= $this->tableless ? 'tableless' : 'tableform' ?> block"<?= $this->cssID ?><?php if ($this->style): ?> style="<?= $this->style ?>"<?php endif; ?>>

    <?php if ($this->headline): ?>
    <<?= $this->hl ?>><?= $this->headline ?></<?= $this->hl ?>>
<?php endif; ?>

<?php if ($this->message): ?>
    <?= $this->message ?>
<?php endif; ?>

<form<?php if ($this->action): ?> action="<?= $this->action ?>"<?php endif; ?> id="<?= $this->formId ?>" method="post" enctype="<?= $this->enctype ?>">
    <div class="formbody">
        <input type="hidden" name="FORM_SUBMIT" value="<?= $this->formId ?>">
        <input type="hidden" name="REQUEST_TOKEN" value="{{request_token}}">
        <?php if (!$this->tableless): ?>
            <table>
                <?= $this->fields ?>
                <tr class="<?= $this->rowLast ?> row_last">
                    <td class="col_0 col_first">&nbsp;</td>
                    <td class="col_1 col_last"><div class="submit_container"><input type="submit" class="submit" value="<?= $this->slabel ?>"></div></td>
                </tr>
            </table>
        <?php else: ?>
            <div class="fields">
                <?= $this->fields ?>
            </div>
            <div class="submit_container">
                <input type="submit" class="submit" value="<?= $this->slabel ?>">
            </div>
        <?php endif; ?>
    </div>
</form>

</div>
<!-- indexer::continue -->



<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">

                <form class="form-horizontal" <?php if ($this->action): ?> action="<?= $this->action ?>"<?php endif; ?> id="<?= $this->formId ?>" method="post" enctype="<?= $this->enctype ?>">
                    <input type="hidden" name="FORM_SUBMIT" value="<?= $this->formId ?>">
                    <input type="hidden" name="REQUEST_TOKEN" value="{{request_token}}">


                    <?= $this->fields ?>

                    <div class="form-group form-actions">
                        <div class="col-xs-6">
                            <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                <input type="checkbox" id="register-terms" name="register-terms"><span></span>
                            </label>
                            <a href="#modal-terms" data-toggle="modal" class="register-terms"><small>View Terms</small></a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Sign Up</button>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
</section>


<!--  NEW -->


<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                <!-- Sign Up Form -->
                <form action="signup.html" method="post" id="form-sign-up" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="register-firstname" name="register-firstname" class="form-control input-lg" placeholder="First name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="email" id="register-email" name="register-email" class="form-control input-lg" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="register-password" name="register-password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="register-password-verify" name="register-password-verify" class="form-control input-lg" placeholder="Verify Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-6">
                            <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                <input type="checkbox" id="register-terms" name="register-terms"><span></span>
                            </label>
                            <a href="#modal-terms" data-toggle="modal" class="register-terms"><small>View Terms</small></a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Sign Up</button>
                        </div>
                    </div>
                </form>
                <!-- END Sign Up Form -->
            </div>
        </div>
    </div>
</section>