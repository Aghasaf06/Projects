//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace HospitalApp
{
    using System;
    using System.Collections.Generic;
    
    public partial class Patients
    {
        public int id { get; set; }
        public string nameSurname { get; set; }
        public string phoneNumber { get; set; }
        public string gender { get; set; }
        public Nullable<System.DateTime> birthday { get; set; }
        public string medDepartment { get; set; }
        public Nullable<System.DateTime> admitDatetime { get; set; }
        public Nullable<System.DateTime> registerDate { get; set; }
        public string note { get; set; }
    }
}