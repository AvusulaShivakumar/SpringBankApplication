package com.shiva;

import java.util.NoSuchElementException;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class BankController {


	@Autowired
	private BankService service;
	@Autowired
	private BankRepo repo;

	@RequestMapping("/")
	public String home() {
	
		return "home";
	}
	
	@RequestMapping("/newaccount")
	public String Reghome(BankDetails b) {
		
		return "/Login";
	}
	
	@RequestMapping("/v")
	public String Welcome(BankDetails b) {
		String message="";
		BankDetails b1=new BankDetails();
		
	
		if(b.getPassword().equals(b.getCpassword())) {
			service.saveBankDetails(b);
			message="/success";
		}else {
			message="/fail";
		}
		
		
		
		
		return message;
	}
	@RequestMapping("/balance")
	public String BalanceForm(BankDetails b) {
		
		
		return "/balanceform";
	}
       

	@RequestMapping("/vb")
	
	public String viewBalance(BankDetails b,Model m) {
		String message="";
		try {
		
		BankDetails b1=repo.findById(b.getAc()).get();
		
		if(b1.getPassword().equals(b.getPassword())&&b1.getAc().equals(b.getAc())&&b1.getPassword().equals(b.getPassword())) {
			m.addAttribute("users", repo.findAll());
		message="/viewbalance";
		}else {
			message="/fail";
		}
		}
		catch(Exception e) {
			System.out.println("Invalid Account number please Register");
			message="/UsernotFound";
		}
		
		return message;
	}
	
	@RequestMapping("/deposit")
	public String DepositForm() {
		
		
		return "/deposit";
	}
	
	@RequestMapping("/vd")
	public String viewDeposit(BankDetails b,Model m) {
		String message="";
		try {
		BankDetails b1=repo.findById(b.getAc()).get();
		if(b.getPassword().equals(b1.getCpassword())&&b.getAc().equals(b1.getAc())&&b.getPassword().equals(b1.getPassword())) {
			
			
			b1.setAmount(b.getAmount()+b1.getAmount());
			repo.save(b1);
		m.addAttribute("users", repo.findAll());
		

		message="/viewbalance";
		}else {
			message="/fail";
		}
		}
		catch(Exception e) {
			System.out.println("Invalid Account number please Register");
			message="/UsernotFound";
		}
		
		return message;
	}
	
	
	@RequestMapping("/withdraw")
	public String withdrawForm() {
			
		
		return "/withdraw";
	}
	
	@RequestMapping("/w")
	public String viewWithdraw(BankDetails b,Model m) {
		String message="";
		try {
			
			
			
		BankDetails b1=repo.findById(b.getAc()).get();
		
		
		
		if(b1.getAmount()<b.getAmount()) {
			message="insufficient";
		}
		else if(b.getAmount()>20000.00) {
			message="highbalance";
		}else if(b.getAmount()<500||(b.getAmount())%2!=0) {
			
			message="validAmt";
		}
		else if(b.getPassword().equals(b1.getCpassword())&&b.getAc().equals(b1.getAc())&&b.getPassword().equals(b1.getPassword())) {
			
			
			b1.setAmount(b1.getAmount()-b.getAmount());
			repo.save(b1);
		m.addAttribute("users", repo.findAll());
		

		message="/viewbalance";
		}else {
			message="/fail";
		}
		}
		catch(Exception e) {
			System.out.println("Invalid Account number please Register");
			message="/UsernotFound";
		}
	
		
		return message;
	}
	
	
	
	
	
	
	@RequestMapping("/transfer")
	public String Transfer() {
			
		
		return "/transfer";
	}
	
	@RequestMapping("/t")
	public String viewTransfer(BankDetails b,Model m) {
		String message="";
		try {
		BankDetails b1=repo.findById(b.getAc()).get();
		if(b.getPassword().equals(b1.getCpassword())&&b.getAc().equals(b1.getAc())&&b.getPassword().equals(b1.getPassword())) {
			
			
			b1.setAmount(b1.getAmount()-b.getAmount());
			repo.save(b1);
		m.addAttribute("users", repo.findAll());
		

		message="/viewbalance";
		}else {
			message="/fail";
		}
	}
	catch(Exception e) {
		System.out.println("Invalid Account number please Register");
		message="/UsernotFound";
	}
		
		return message;
	}
	
       
	@RequestMapping("/close")
	public String closeAccount() {
			
		
		return "/close";
	}
	@RequestMapping("/c")
	public String closeAccount(BankDetails b,Model m) {
		String message="";
		try {
		BankDetails b1=repo.findById(b.getAc()).get();
		if(b.getPassword().equals(b1.getCpassword())&&b.getAc().equals(b1.getAc())&&b.getPassword().equals(b1.getPassword())) {
			
			
		
			repo.deleteById(b.getAc());
		m.addAttribute("users", repo.findAll());
		

		message="/delete";
		}else {
			message="/fail";
		}
	}
	catch(Exception e) {
		System.out.println("Invalid Account number please Register");
		message="/UsernotFound";
	}
		
		return message;
	}
	@RequestMapping("/about")
	public String aboutAccount() {
			
		
		return "/about";
	}
	
	
	
	
	
}

	
	
	
	