import 'package:belajar_drawer/pages/chat_page.dart';
import 'package:belajar_drawer/pages/contacts_page.dart';
import 'package:belajar_drawer/pages/status_page.dart';
import 'package:belajar_drawer/widget/app_drawer.dart';
import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
      length: 3,
      child: Scaffold(
        drawer: const AppDrawer(),
        appBar: AppBar(
          title: const Text("Chat App"),
          bottom: const TabBar(
            tabs: [
              Tab(text: "Chats"),
              Tab(text: "Status"),
              Tab(text: "Contacts"),
            ],
          ),
        ),
        body: const TabBarView(
          children: [
            ChatPage(),
            StatusPage(),
            ContactsPage(),
          ],
        ),
      ),
    );
  }
}
