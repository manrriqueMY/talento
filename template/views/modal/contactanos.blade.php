<div class="modal" tabindex="-1" role="dialog" id="contact_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/home/feedback" class="needs-validation" method="POST" novalidate>
                <div class="modal-header">                    
                    <h4 class="modal-title"><i class="fa fa-envelope"></i> Tu opinión nos importa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label required" for="Feedback_email">Correo</label>
                        <input type="email" id="Feedback_email" name="email" required col="col-xs-12" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label required" for="Feedback_content">Mensaje</label>
                        <textarea id="Feedback_content" name="content" required col="col-xs-12" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" style="pointer-events: all; cursor: pointer;">Enviar</button>
                    <br><br>
                </div>
            </form>
        </div>
    </div>
</div>