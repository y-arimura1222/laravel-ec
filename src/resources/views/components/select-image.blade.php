<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <h2 class="modal__title" id="modal-1-title">
                    Micromodal 🔥
                </h2>
                <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <div class="modal__content" id="modal-1-content">
                <p>This is a completely accessible modal.</p>
                <p>
                    Try hitting the <code>tab</code> key* and notice how the focus stays within the modal itself. To close modal
                    hit the <code>esc</code> button, click on the overlay or just click the close button.
                </p>
                <p>
                    <small>* <code>alt+tab</code> in safari</small>
                </p>
            </div>
            <footer class="modal__footer">
                <button type="button" class="modal__btn modal__btn-primary">Continue</button>
                <button type="button" class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
            </footer>
        </div>
    </div>
</div>
<a data-micromodal-trigger="modal-1" href="javascript:;">Open Modal Test</a>
