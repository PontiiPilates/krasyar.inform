<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast @if (session('message')) show @endif" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            @if (session('message.type') == 'success')
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" style="width: 16px; height: 16px; fill: #75b798;">
                    <use xlink:href="#check-circle-fill"/>
                </svg>
            @elseif(session('message.type') == 'danger')
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" style="width: 16px; height: 16px; fill: #ea868f;">
                    <use xlink:href="#exclamation-triangle-fill"/>
                </svg>
            @endif
            <strong class="me-auto">
                @if (session('message.type') == 'success')
                    Успешно
                @elseif(session('message.type') == 'danger')
                    Неудача
                @endif
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">{{ session('message.text') }}</div>
    </div>
</div>