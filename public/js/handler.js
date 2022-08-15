function workHandler() {
   return {
      fields: [
      {
         work_year: '',
         work_month: '',
         work_background: '',
      },
      {
         work_year: '',
         work_month: '',
         work_background: '',
      },
      ],
      addNewField() {
         if(this.fields.length < 12){
            this.fields.push({
               work_year: '',
               work_month: '',
               work_background: '',
            });
         }
      },
      removeField(index) {
         this.fields.splice(index, 1);
      },
      removeAllField() {
         this.fields.splice(0);
      }
   }
}

function educationHandler() {
   return {
      fields: [
      {
         education_year: '',
         education_month: '',
         education_background: '',
      },
      {
         education_year: '',
         education_month: '',
         education_background: '',
      },
      ],
      addNewField() {
         if(this.fields.length < 12){
            this.fields.push({
               education_year: '',
               education_month: '',
               education_background: '',
            });
         }
      },
      removeField(index) {
         this.fields.splice(index, 1);
         if(this.fields.length < 2){
            this.fields.push({
               education_year: '',
               education_month: '',
               education_background: '',
            });
         }
      },
      removeAllField() {
         this.fields.splice(0);
         for(let i = 0; i < 2; i++){
            this.fields.push({
               education_year: '',
               education_month: '',
               education_background: '',
            });
         }
      }
   }
}

function licenceHandler() {
   return {
      fields: [
      ],
      addNewField() {
         if(this.fields.length < 6){
            this.fields.push({
               licence_year: '',
               licence_month: '',
               licence_background: '',
            });
         }
      },
      removeField(index) {
         this.fields.splice(index, 1);
      },
      removeAllField() {
         this.fields.splice(0);
      }
   }
}