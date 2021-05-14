<div id="app">
    <projects-component
        :recent-projects = "'@lang('front.recent-projects')'"
        :checkout-projects = "'@lang('front.checkout-projects')'"
        :all = "'@lang('front.all')'"
        :lang = "'{{app()->getLocale()}}'"
    ></projects-component>
</div>
