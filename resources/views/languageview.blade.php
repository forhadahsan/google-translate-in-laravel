<!DOCTYPE html>
<html>
<head>
    <title>Laravel Google Translate Package Example </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Laravel Google Translate</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <strong>Select Language: </strong>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bangla</option>
                            <option value="in" {{ session()->get('locale') == 'in' ? 'selected' : '' }}>India</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                            <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                           
                        </select>
                    </div>
                </div>
                <h3>{{ GoogleTranslate::trans('', app()->getLocale()) }}</h3>

                <p>
                    {{ GoogleTranslate::trans('
                    
                    Independence: Bangladesh gained independence on March 26, 1971, following a brutal war against Pakistan. The conflict, known as the Bangladesh Liberation War, lasted for nine months and saw significant casualties and hardships. The country was officially recognized as an independent nation on December 16, 1971, with Sheikh Mujibur Rahman as its first leader.
                    
                    ', app()->getLocale()) }}
                </p>
                <h3>{{ GoogleTranslate::trans('How are you ', app()->getLocale()) }}</h3>
            </div>
        </div>
    </div>
</body>
    
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
</html>
