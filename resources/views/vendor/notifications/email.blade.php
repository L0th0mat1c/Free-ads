@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Bonjour!')
@endif
@endif

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<style>
p{
    font-family: 'Poppins', sans-serif;
}
</style>

<p>Bienvenu sur Annunciati ! Veuillez cliquer sur le lien ci-dessous afin de vous authentifier.  <p>



{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>

@component('mail::button', ['url' => $actionUrl, 'color' => $color])
<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                {{ $actionText }}
                                </button>
                            </div>
                        </div>

@endcomponent
@endisset


<p>Si vous n'êtes pas à l'origine de cette demande merci d'ignorer cette email. <p>




{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Copiez collez le lien ci-dessous si vous rencontez des problemes :",
    
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
