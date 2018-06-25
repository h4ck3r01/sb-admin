<div class="panel panel-{{ $config['class'] }}">
    @if( isset($config['header']))
        <div class="panel-heading">
            <h3 class="panel-title">@yield ($config['as'] . '_panel_title')
                @if( $config['controls'])
                    <div class="panel-control pull-right">
                        <a class="panelButton"><i class="fa fa-refresh"></i></a>
                        <a class="panelButton"><i class="fa fa-minus"></i></a>
                        <a class="panelButton"><i class="fa fa-remove"></i></a>
                    </div>
                @endif
            </h3>

        </div>
    @endif

    <div class="panel-body">
        @yield ($config['as'] . '_panel_body')
    </div>
    @if($config['footer'])
        <div class="panel-footer">@yield ($config['as'] . '_panel_footer')</div>
    @endif
</div>