<select id="languageSwitcher">
        <option value="en" <?php $cuRRlocal = Config::get('app.locale'); echo ($cuRRlocal) == 'en' ? "selected" : "" ?>>English</option>
        <option value="ru" <?php echo ($cuRRlocal) == 'ru' ? "selected" : "" ?>>Russia</option>
    </select>
    <input type="hidden" name="_token" id="csrf_toKen" value="{{ csrf_token() }}">
<h1>{{ __('app.Home') }}</h1>