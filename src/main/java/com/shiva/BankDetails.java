package com.shiva;

import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "sdfc")
public class BankDetails {
	
	@Id
	private String ac;
	private String name;
	private String password;
	private String cpassword;
	private double amount;
	private String address;
	private String m_no;
	public BankDetails() {
		super();
		// TODO Auto-generated constructor stub
	}
	public BankDetails(String ac, String name, String password, String cpassword, double amount, String address,
			String m_no) {
		super();
		this.ac = ac;
		this.name = name;
		this.password = password;
		this.cpassword = cpassword;
		this.amount = amount;
		this.address = address;
		this.m_no = m_no;
	}
	public String getAc() {
		return ac;
	}
	public void setAc(String ac) {
		this.ac = ac;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
	}
	public String getCpassword() {
		return cpassword;
	}
	public void setCpassword(String cpassword) {
		this.cpassword = cpassword;
	}
	public double getAmount() {
		return amount;
	}
	public void setAmount(double amount) {
		this.amount = amount;
	}
	public String getAddress() {
		return address;
	}
	public void setAddress(String address) {
		this.address = address;
	}
	public String getM_no() {
		return m_no;
	}
	public void setM_no(String m_no) {
		this.m_no = m_no;
	}
	@Override
	public String toString() {
		return "BankDetails [ac=" + ac + ", name=" + name + ", password=" + password + ", cpassword=" + cpassword
				+ ", amount=" + amount + ", address=" + address + ", m_no=" + m_no + "]";
	}

	
	
	
}