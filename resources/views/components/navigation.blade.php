<div class="row mb-5">
    <div class="col-md-3 col-12 upper-button mb-2">
        <a href="{{ route('krasyar') }}" type="button" class="btn btn-danger text-start h-100 big-buttons w-100">
            <h5>Красный Яр</h5>
            <p>Сообщить о работе сотрудника Красного Яра</p>
        </a>
    </div>
    <div class="col-md-3 col-12 upper-button mb-2">
        <a href="{{ route('discounter') }}" type="button" class="btn btn-warning text-start h-100 big-buttons w-100">
            <h5>Батон</h5>
            <p>Сообщить о работе сотрудником Дискаунтера</p>
        </a>
    </div>
    <div class="col-md-3 col-12 mb-2">
        <a href="{{ route('office') }}" type="button" class="btn btn-success text-start h-100 big-buttons w-100">
            <h5>Центральный офис</h5>
            <p>Оставить сообщение о работе Центрального офиса</p>
        </a>
    </div>
    <div class="col-md-3 col-12 mb-2">
        <a href="{{ route('improve') }}" type="button" class="btn btn-info text-start h-100 big-buttons w-100">
            <h5>Условия труда</h5>
            <p>Оставить пожелание по улучшению условий труда</p>
        </a>
    </div>
</div>

<style>
    /* @media (max-width: 768px) {
        .upper-button {
            margin-bottom: 24px;
        }
    } */

    .big-buttons {
        color: white;
    }

    .big-buttons:hover {
        color: white;

    }

    .btn:active {
        color: white !important;
    }
</style>
