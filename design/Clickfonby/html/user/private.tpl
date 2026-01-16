{* Error *}
{if isset($error)}
	<div class="alert alert-danger" role="alert">
		{if $error == 'empty_name'}
			{$lang->enter_your_name|escape}
		{elseif $error == 'empty_email'}
			{$lang->enter_your_email|escape}
		{elseif $error == 'empty_password'}
			{$lang->enter_password|escape}
		{elseif $error == 'user_exists'}
			{$lang->email_already_registered|escape}
		{else}
			{$error}
		{/if}
	</div>
{/if}

{* Success *}
{if isset($success)}
	<div class="alert alert-success" role="alert">
		{$lang->message_success|escape}
	</div>
{/if}

<div class="acount-tab">
    <h4 class="fw-bold text-capitalize mb-30">{$lang->contact_details_user|default:'Contact details'|escape}</h4>
    <div class="content">
        <form id="profile-form" class="update-profile-form" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="NAME" class="font_14">
                            {$lang->name|escape} <span class="color-red1">*</span>
                        </label>
                        <input required type="text" class="form-control" name="name" id="NAME" maxlength="50" value="{$name|escape}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="EMAIL" class="font_14">
                            E-mail <span class="color-red1">*</span>
                        </label>
                        <input required type="text" name="email" id="EMAIL" maxlength="50" class="form-control" value="{$email|escape}">
                        {if $lang->user_email_text}
                            <div class="text_block font_13 mt-1">{$lang->user_email_text|escape}</div>
                        {/if}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="PERSONAL_PHONE" class="font_14">
                            {$lang->phone|escape}
                        </label>
                        <input type="text" name="phone" id="PERSONAL_PHONE" class="form-control" maxlength="255" value="{$phone|escape}">
                        {if $lang->user_phone_text}
                            <div class="text_block font_13 mt-1">{$lang->user_phone_text|escape}</div>
                        {/if}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="ADDRESS" class="font_14">
                            {$lang->address|escape}
                        </label>
                        <input type="text" name="address" id="ADDRESS" class="form-control" maxlength="255" value="{$address|escape}">
                        {if $lang->shipping_address}
                            <div class="text_block font_13 mt-1">{$lang->shipping_address|escape}</div>
                        {/if}
                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                    <button class="butn bg-green2 text-white radius-4 fw-500 fsz-14 text-uppercase mt-2 px-5 py-2" type="submit" name="save" value="save">
                        <span>{$lang->save_changes|default:'Save changes'|escape}</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="acount-tab mt-40">
    <h4 class="fw-bold text-capitalize mb-30">{$lang->change_password|escape}</h4>
    <div class="content">
        <form id="pass-form" method="post" class="pass-form">
            <input type="hidden" name="name" value="{$name|escape}">
            <input type="hidden" name="email" value="{$email|escape}">
            <input type="hidden" name="phone" value="{$phone|escape}">
            <input type="hidden" name="address" value="{$address|escape}">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-4 show_hide_password">
                        <label for="NEW_PASSWORD" class="font_14">
                            {$lang->new_password|escape} {if $lang->registraion_password_text}({$lang->registraion_password_text|escape}){/if}
                        </label>
                        <input type="password" name="password" id="NEW_PASSWORD" maxlength="50" class="form-control password" value="">
                        <i class="show_pass fal fa-eye-slash"></i>

                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                    <button class="butn bg-green2 text-white radius-4 fw-500 fsz-14 text-uppercase mt-2 px-5 py-2" type="submit" name="save" value="save">
                        <span>{$lang->save_changes|default:'Save changes'|escape}</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
