<div class="col-md-12">
    <div class="panel panel-visible" id="spy3">
        <div class="panel-heading">
            <div class="panel-title hidden-xs">
                <span class="fa fa-mail-forward"></span>Curriculos enviados
            </div>
        </div>
        <div class="panel-body pn">
            <table id="jobTable" class="table table-striped table-hover dataTable" width="100%" cellspacing="0" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cargo</th>
                        <th>Status</th>
                        <th>Tipo de contrato</th>
                        <th>Criado</th>
                        <th>Visualizado</th>
                        <th>Email Id</th>
                    </tr>
                </thead>
                <tbody>
                    {% for job in jobHasUser %}
                    <tr>
                        <td>{{ job.Job.idJob }}</td>
                        <td>{{ job.Job.office }}</td>
                        <td>{{ job.Job.status }}</td>
                        <td>{{ job.Job.JobContract.description }}</td>
                        <td>{{ job.created }}</td>
                        <td>{{ job.view }}</td>
                        <td>{{ job.emailId }}</td>
                    </tr>
                    {% endfor  %}
                </tbody>
            </table>
        </div>
    </div>
</div>


<style>
    table{
        color:#000;
    }
</style>